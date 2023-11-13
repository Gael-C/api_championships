<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateTeamCommand;
use App\Http\Command\DeleteTeamCommand;
use App\Http\Command\UpdateTeamCommand;
use App\Models\Team;
use App\Models\Pictures;
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

        $name = $validated['name'];
        $nickname = $validated['nickname'];
        $foundation = $validated['foundation'];
        $stade = $validated['stade'];
        $capacity = $validated['capacity'];
        $website = $validated['website'];
        $facebook = $validated['facebook'];
        $twitter = $validated['twitter'];
        $instagram = $validated['instagram'];
        $youtube = $validated['youtube'];
        $logo = $validated['logo'];
        $stade_pic = $validated['stade_pic'];

        if (!isset($request->league)) {
            return new JsonResponse("Merci de renseigner un championnat", 403);
         }
        $league = $validated['league'];

        $logo = $logo->store('logo', 'public');
        $stade_pic = $stade_pic->store('stade_pic', 'public');
        $team = new CreateTeamCommand(
            $name,
            $nickname,
            $foundation,
            $stade,
            $capacity,
            $website,
            $facebook,
            $twitter,
            $instagram,
            $youtube,
            $logo,
            $stade_pic,
            $league
        );

        $this->commandBus->handle($team);


        return new JsonResponse(["message" => "Votre équipe à bien été créée"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Team $team
     * @return JsonResponse
     */
    public function show(Team $team): JsonResponse
    {
        $query = new GetOneTeam($team->id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Team $team
     * @return JsonResponse
     * @authenticated
     */
    public function update(Request $request, Team $team)
    {
        if($request->method() === 'PUT' || $request->method() === 'PATCH'){
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

            $name = $validated['name']?? '';
            $nickname = $validated['nickname'] ?? '';
            $foundation = $validated['foundation'] ?? '';
            $stade = $validated['stade'] ?? '';
            $capacity = $validated['capacity'] ?? '';
            $website = $validated['website'] ?? '';
            $facebook = $validated['facebook'] ?? '';
            $twitter = $validated['twitter'] ?? '';
            $instagram = $validated['instagram'] ?? '';
            $youtube = $validated['youtube'] ?? '';
            $logo = $validated['logo'] ?? '';
            $stade_pic = $validated['stade_pic'] ?? '';
            $league = $validated['league'] ?? '';
            if (isset($validated['logo']) && isset($validated['stade_pic'])) {

                $logo = $logo->store('logo', 'public');
                $stade_pic = $stade_pic->store('stade_pic','public');

            }elseif (isset($validated['logo'])) {

                $logo = $logo->store('logo', 'public');
            }elseif (isset($validated['stade_pic'])){

                $stade_pic = $stade_pic->store('stade_pic','public');
            }
            $team = new UpdateTeamCommand(
                $team->id,
                $name,
                $nickname,
                $foundation,
                $stade,
                $capacity,
                $website,
                $facebook,
                $twitter,
                $instagram,
                $youtube,
                $logo,
                $stade_pic,
                $league
            );
            $this->commandBus->handle($team);

            return new JsonResponse(["message" => " L'équipe a bien été modifiée"],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Team $team
     * @return JsonResponse
     * @authenticated
     */
    public function destroy(Team $team): JsonResponse
    {
        $this->commandBus->handle(new DeleteTeamCommand($team->id));
        return new JsonResponse(["L'équipe avec l'id ".$team->id." a bien été supprimée"], 200);
    }
}
