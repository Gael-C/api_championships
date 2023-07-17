<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pictures;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResponse(Pictures::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'location' => 'required|string|max:255',
            'team_id' => 'nullable|int',
            'league_id' => 'nullable|int'
        ]);

        if (!isset($request->team_id) || !isset($request->league_id)) {
            return new JsonResponse("Merci de renseigner l'id du championnat ou de l'équipe.", 201);
        }
        $picture = Pictures::create($validate);

        return new JsonResponse($picture, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function show(Pictures $pictures)
    {
        return new JsonResponse($pictures, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pictures $pictures)
    {
        $validate = $request->validate([
            'location' => 'required|string|max:255',
            'team_id' => 'nullable|int',
            'league_id' => 'nullable|int'
        ]);

        if (!isset($request->team_id) || !isset($request->league_id)) {
            return new JsonResponse("Merci de renseigner l'id du championnat ou de l'équipe.", 201);
        }
        $pictures->update($validate);

        return new JsonResponse($pictures, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pictures $pictures)
    {
        //
    }
}
