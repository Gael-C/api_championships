<?php

namespace App\Http\Controllers\API;

use App\Models\Team;
use App\Models\Pictures;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResponse(Team::with(['leagues', 'pictures'])->get(), 200); 
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
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:5',
            'foundation' => 'required|string|max:4',
            'stade' => 'required|string',
            'capacity' =>'required|string',
            'website' => 'required|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable||string',
            'logo' => 'required|string'
        ]);

        
        $team = Team::create($validated);
        
        if (!isset($request->league)) {
           return new JsonResponse("Merci de renseigner un championnat", 403);
        }
        
        $team->leagues()->attach($request->league);
        
        if ($request->location !== null) {
            $pic = $request->location;
            $picture = Pictures::create([
                'location' => $pic,
                'team_id' => $team->id
            ]);
        }
        
        return new JsonResponse($team->load('leagues')->load('pictures'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return new JsonResponse($team->load(['leagues','pictures']), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     * @authenticated
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
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable||string',
            'description' => 'nullable|string',
            'logo' => 'nullable|string'
        ]);
        $team->update($validated);

        if ($request->league !== null) {
            $team->leagues()->attach($request->league);
        }

        if($request->location !== null){
            $pic = $request->location;
            $team->pictures()->update([
                'location' => $pic,
                'team_id' => $team->id
            ]);

        }
        return new JsonResponse($team->load('leagues')->load('pictures'), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(Team $team)
    {
        return new JsonResponse($team->delete(), 200);
    }
}
