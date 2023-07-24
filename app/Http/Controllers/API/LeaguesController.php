<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\League;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeaguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return League::with('teams')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:75',
            'creation' => 'required|string|max:4',
            'last_champion' => 'nullable|integer|exists:team,id',
            'most_successfull' => 'nullable|integer|exists:team,id',
            'logo' => 'required|string'
        ]);

        $league = League::create($validated);

        return new JsonResponse($league, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        return new JsonResponse($league->load(['teams', 'pictures']), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function update(Request $request, League $league)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:75',
            'creation' => 'nullable|string|max:4',
            'last_champion' => 'nullable|integer|exists:teams,id',
            'most_successfull' => 'nullable|integer|exists:teams,id',
            'logo' => 'nullable|string'
        ]);

        $league->update($validated);

        return new JsonResponse($league, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(League $league)
    {
        return new JsonResponse($league->delete(), 200);
    }
}
