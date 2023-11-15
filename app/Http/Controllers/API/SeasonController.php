<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
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
        return new JsonResponse();
    }

    /**
     * Display the specified resource.
     *
     * @param  Seasons  $seasons
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
     * @param  Seasons  $seasons
     * @return JsonResponse
     */
    public function update(Request $request, Seasons $seasons): JsonResponse
    {
        return  new JsonResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Seasons  $seasons
     * @return JsonResponse
     */
    public function destroy(Seasons $seasons): JsonResponse
    {
        return new JsonResponse();
    }
}
