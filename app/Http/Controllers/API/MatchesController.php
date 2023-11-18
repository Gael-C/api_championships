<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateMatchesCommand;
use App\Http\Command\DeleteMatchesCommand;
use App\Http\Command\UpdateMatchesCommand;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllMatches;
use App\Http\Query\GetOneMatch;
use App\Models\Matches;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Js;
use Psy\Util\Json;

class MatchesController extends Controller
{

    public function __construct(private CommandBus $commandBus)
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index():JsonResponse
    {
        $matches = new GetAllMatches();
        return new JsonResponse($matches->get(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "home_team_id" => "required|int",
            "home_team_result" => "required|int",
            "home_team_tries" => "required|int",
            "away_team_id" => "required|int",
            "away_team_result" => "required|int",
            "away_team_tries" => "required|int",
            "match_week" => "required|int"
        ]);

        $home_team = $validated['home_team_id'];
        $home_result = $validated['home_team_result'];
        $home_tries = $validated['home_team_tries'];
        $away_team = $validated['away_team_id'];
        $away_result = $validated['away_team_result'];
        $away_tries = $validated['away_team_tries'];
        $match_week = $validated['match_week'];

        $this->commandBus->handle(new CreateMatchesCommand(
            $home_team,
            $home_result,
            $home_tries,
            $away_team,
            $away_result,
            $away_tries,
            $match_week));

        return  new JsonResponse("Le match a bien été créé", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $query = new GetOneMatch($id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            "home_team_id" => "required|int",
            "home_team_result" => "required|int",
            "home_team_tries" => "required|int",
            "away_team_id" => "required|int",
            "away_team_result" => "required|int",
            "away_team_tries" => "required|int",
            "match_week" => "required|int"
        ]);

        $home_team = $validated['home_team_id'];
        $home_result = $validated['home_team_result'];
        $home_tries = $validated['home_team_tries'];
        $away_team = $validated['away_team_id'];
        $away_result = $validated['away_team_result'];
        $away_tries = $validated['away_team_tries'];
        $match_week = $validated['match_week'];

        $this->commandBus->handle(new UpdateMatchesCommand(
            $id,
            $home_team,
            $home_result,
            $home_tries,
            $away_team,
            $away_result,
            $away_tries,
            $match_week));

        return  new JsonResponse("Le match avec l'id ".$id." a bien été modifié.", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        $this->commandBus->handle(new DeleteMatchesCommand($id));
        return new JsonResponse("Le match avec l'id ".$id." a bien été supprimé", 200);
    }
}
