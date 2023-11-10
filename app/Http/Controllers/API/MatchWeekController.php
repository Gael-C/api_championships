<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MatchWeek;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MatchWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResponse(MatchWeek::with('matches')->get(), 200);
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
     * @param  \App\Models\MatchWeek  $matchWeek
     * @return \Illuminate\Http\Response
     */
    public function show(MatchWeek $matchWeek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchWeek  $matchWeek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchWeek $matchWeek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchWeek  $matchWeek
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchWeek $matchWeek)
    {
        //
    }
}
