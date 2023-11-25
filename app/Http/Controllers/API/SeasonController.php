<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateSeasonCommand;
use App\Http\Command\DeleteSeasonCommand;
use App\Http\Command\UpdateSeasonCommand;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllSeasons;
use App\Http\Query\GetOneSeason;
use App\Models\Seasons;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class SeasonController extends Controller
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
        $query = new GetAllSeasons();
        return new JsonResponse($query->get());
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
            'season' => 'required|string|max:10'
        ]);

        $seasonTime = $validated['season'];

        $this->commandBus->handle(new CreateSeasonCommand($seasonTime));

        return new JsonResponse(["message"=>"La saison a bien été créée"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $query = new GetOneSeason($id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $request->validate([
            'season' => 'nullable|string|max:10'
        ]);

        $seasonTime = $validated['season'];

        $this->commandBus->handle(new UpdateSeasonCommand($id, $seasonTime));
        return new JsonResponse(["message" => "La saison avec l'id " . $id . " a été modifiée."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->commandBus->handle(new DeleteSeasonCommand($id));
        return new JsonResponse("La saison avec l'id ". $id." a bien été supprimée", 200);
    }
}
