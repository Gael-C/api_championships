<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateTeamCommand;
use App\Http\Command\DeleteTeamCommand;
use App\Http\Command\UpdateTeamCommand;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllTeams;
use App\Http\Query\GetOneTeam;
use Illuminate\Http\Response;

class TeamsController extends Controller
{

    public function __construct(private CommandBus $commandBus)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $teams = new GetAllTeams();
        return new JsonResponse($teams->get(), 200);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @authenticated
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:5',
            'foundation' => 'required|string|max:4',
            'stade' => 'required|string',
            'capacity' =>'required|string',
            'website' => 'required|string',
            'twitter' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable||string',
            'description' => 'nullable|string',
            'logo' => 'required|image',
            'stade_pic' => 'required|image',
            'league' =>'required|integer|exists:league,id'
        ]);
        $logo = $request->logo;
        $stade_pic = $request->stade_pic;

        $validated['logo'] = $logo->store('logo', 'public');
        $validated['stade_pic'] = $stade_pic->store('stade_pic','public');

        if (!isset($request->league)) {
            return new JsonResponse("Merci de renseigner un championnat", 403);
         }

        $validated['logo'] = $validated['logo']->store('logo', 'public');
        $validated['stade_pic'] = $validated['stade_pic']->store('stade_pic', 'public');
        $team = new CreateTeamCommand(
            $validated['name'],
            $validated['nickname'],
            $validated['foundation'],
            $validated['stade'],
            $validated['capacity'],
            $validated['website'],
            $validated['facebook'],
            $validated['twitter'],
            $validated['instagram'],
            $validated['youtube'],
            $validated['logo'],
            $validated['stade_pic'],
            $validated['league']
        );

        $this->commandBus->handle($team);


        return new JsonResponse(["message" => "Votre équipe à bien été créée"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $query = new GetOneTeam($id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @authenticated
     */
    public function update(Request $request, int $id)
    {
            $validated = $request->validate([
                'name' => 'nullable|string|max:255',
                'nickname' => 'nullable|string|max:5',
                'foundation' => 'nullable|string|max:4',
                'stade' => 'nullable|string',
                'capacity' =>'nullable|string',
                'website' => 'nullable|string',
                'twitter' => 'nullable|string',
                'facebook' => 'nullable|string',
                'instagram' => 'nullable|string',
                'youtube' => 'nullable||string',
                'description' => 'nullable|string',
                'logo' => 'nullable|image',
                'stade_pic' => 'nullable|image',
                'league' => 'nullable|int'
            ]);
            
            if (isset($validated['logo']) && isset($validated['stade_pic'])) {

                $validated['logo'] = $validated['logo']->store('logo', 'public');
                $validated['stade_pic'] = $validated['stade_pic']->store('stade_pic','public');

            }elseif (isset($validated['logo'])) {

                $validated['logo'] =  $validated['logo']->store('logo', 'public');
            }elseif (isset($validated['stade_pic'])){

                $validated['stade_pic'] = $validated['stade_pic']->store('stade_pic','public');
            }
        $this->commandBus->handle(new UpdateTeamCommand(
                $id,
                $validated['name'],
                $validated['nickname'],
                $validated['foundation'],
                $validated['stade'],
                $validated['capacity'],
                $validated['website'],
                $validated['facebook'],
                $validated['twitter'],
                $validated['instagram'],
                $validated['youtube'],
                $validated['logo'],
                $validated['stade_pic'],
                $validated['league']
            ));

            return new JsonResponse( "L'équipe avec l'id ".$id."  a bien été modifiée",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     * @authenticated
     */
    public function destroy(int $id): JsonResponse
    {
        $this->commandBus->handle(new DeleteTeamCommand($id));
        return new JsonResponse("L'équipe avec l'id ".$id." a bien été supprimée", 200);
    }
}

