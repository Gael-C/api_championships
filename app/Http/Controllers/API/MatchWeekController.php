<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Query\GetAllMatchWeeks;
use App\Http\Query\GetOneMatchweek;
use App\Models\MatchWeek;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class MatchWeekController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param MatchWeek $matchWeek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchWeek $matchWeek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MatchWeek $matchWeek
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchWeek $matchWeek)
    {
        //
    }
}
