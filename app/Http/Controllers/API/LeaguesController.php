<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateLeagueCommand;
use App\Http\Command\DeleteLeagueCommand;
use App\Http\Command\DeleteLeagueHandler;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllLeagues;
use App\Http\Query\GetOneLeague;
use App\Models\League;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeaguesController extends Controller
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
        $leagues = new GetAllLeagues();

        return new JsonResponse($leagues->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     * @authenticated
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:75',
            'creation' => 'required|string|max:4',
            'last_champion' => 'required|integer|exists:teams,id',
            'most_successfull' => 'nullable|integer|exists:teams,id',
            'logo' => 'required|image'
        ]);

        $validated['logo'] = $validated['logo']->store('logo', 'public');

        $league = new CreateLeagueCommand(
            $validated['name'],
            $validated['creation'],
            $validated['last_champion'],
            $validated['most_successfull'],
            $validated['logo']
        );

        $this->commandBus->handle($league);

        return new JsonResponse("Votre league a bien été créé", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  League  $league
     * @return JsonResponse
     */
    public function show(League $league): JsonResponse
    {
        $query = new GetOneLeague($league->id);
        return new JsonResponse($query->get(), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param  League  $league
     * @return JsonResponse
     * @authenticated
     */
    public function update(Request $request, League $league)
    {
        if($request->_method === 'PUT' || $request->_method === 'PATCH'){

            $validated = $request->validate([
                'name' => 'nullable|string|max:75',
                'creation' => 'nullable|string|max:4',
                'last_champion' => 'nullable|integer|exists:teams,id',
                'most_successfull' => 'nullable|integer|exists:teams,id',
                'logo' => 'nullable|image',
            ]);

            if (isset($validated['logo'])) {

                $logo = $request->logo;
                $validated['logo'] = $logo->store('logo', 'public');
            }

            $league->update($validated);

            return new JsonResponse($league, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param League  $league
     * @return JsonResponse
     * @authenticated
     */
    public function destroy(League $league): JsonResponse
    {
        $this->commandBus->handle(new DeleteLeagueCommand($league->id));
        return new JsonResponse("La league avec l'id ".$league->id." a bien été supprimée", 200);
    }
}
