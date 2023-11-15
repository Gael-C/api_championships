<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Query\GetAllMatches;
use App\Http\Query\GetOneMatch;
use App\Models\Matches;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class MatchesController extends Controller
{
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
     * @param Matches $matches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matches $matches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Matches $matches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matches $matches)
    {
        //
    }
}
