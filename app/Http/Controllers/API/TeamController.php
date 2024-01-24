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

class TeamController extends Controller
{

    public function __construct(private CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
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
            'slug' => 'required|string|max:20',
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
            'league' =>'required|integer|exists:leagues,id'
        ]);

        $validated['logo'] = $validated['logo']->store('logo', 'public');

        $team = new CreateTeamCommand(
            $validated['name'],
            $validated['slug'],
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
            $validated['league']
        );

        $this->commandBus->handle($team);


        return new JsonResponse(["message" => "Votre équipe à bien été créée"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return JsonResponse
     */
    public function show(string $slug): JsonResponse
    {
        $query = new GetOneTeam($slug);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $slug
     * @return JsonResponse
     * @authenticated
     */
    public function update(Request $request, string $slug)
    {
            $validated = $request->validate([
                'name' => 'nullable|string|max:255',
                'slug' => 'nullable|string|max:20',
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
                'league' => 'nullable|int'
            ]);
            
            if (isset($validated['logo'])) {

                $validated['logo'] = $validated['logo']->store('logo', 'public');
            }
        $this->commandBus->handle(new UpdateTeamCommand(
                $slug,
                $validated['name'],
                $validated['slug'],
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
                $validated['league']
            ));

            return new JsonResponse( "L'équipe avec a bien été modifiée",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $slug
     * @return JsonResponse
     * @authenticated
     */
    public function destroy(string $slug): JsonResponse
    {
        $this->commandBus->handle(new DeleteTeamCommand($slug));
        return new JsonResponse("L'équipe a bien été supprimée", 200);
    }
}

