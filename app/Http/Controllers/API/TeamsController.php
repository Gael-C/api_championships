<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Team::with('leagues')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:5',
            'foundation' => 'required|string|max:4',
            'stade' => 'required|string',
            'capacity' =>'required|string',
            'website' => 'required|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|tring',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable||string',
            'description' => 'nullable|string',
        ]);

        $team = Team::create($validated);
        
        return ($team);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return $team->load('leagues');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'nickname' => 'nullable|string|max:5',
            'foundation' => 'nullable|string|max:4',
            'stade' => 'nullable|string',
            'capacity' =>'nullable|string',
            'website' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|tring',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable||string',
            'description' => 'nullable|string',
        ]);

        $team->update($validated);

        return $team;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        return $team->delete();
    }
}
