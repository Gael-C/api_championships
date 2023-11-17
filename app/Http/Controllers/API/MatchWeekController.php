<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateMatchWeekCommand;
use App\Http\Command\DeleteLeagueCommand;
use App\Http\Command\DeleteMatchWeekCommand;
use App\Http\Command\UpdateMatchWeekCommand;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllMatchWeeks;
use App\Http\Query\GetOneMatchweek;
use App\Models\MatchWeek;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Js;
use Psy\Util\Json;

class MatchWeekController extends Controller
{
    /**
     * @param CommandBus $commandBus
     */
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
        $matchWeek = new GetAllMatchWeeks();
        return new JsonResponse($matchWeek->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "match_week_number" => "required|string|max:50",
            "seasons_id" => "required|integer"
        ]);

        $matchWeekNumber = $validated['match_week_number'];
        $seasonId = $validated['seasons_id'];

        $this->commandBus->handle(new CreateMatchWeekCommand($matchWeekNumber, $seasonId));

        return new JsonResponse("Votre journée a bien été créée", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param MatchWeek $matchWeek
     * @return JsonResponse
     */
    public function show(MatchWeek $matchWeek): JsonResponse
    {
        $query = new GetOneMatchweek($matchWeek->id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
            $validated = $request->validate([
                "match_week_number" => "nullable|string|max:50",
                "seasons_id" => "nullable|integer"
            ]);

            $matchWeekNumber = $validated['match_week_number'];
            $seasonId = $validated['seasons_id'];

            $this->commandBus->handle(new UpdateMatchWeekCommand($id, $matchWeekNumber, $seasonId));

            return  new JsonResponse("La journée avec l'id ".$id." a bien été mise à jour.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->commandBus->handle(new DeleteMatchWeekCommand($id));
        return new JsonResponse("La journée avec l'id ".$id." a bien été supprimée.");
    }
}
