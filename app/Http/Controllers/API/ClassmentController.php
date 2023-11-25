<?php

namespace App\Http\Controllers\API;

use App\CommandBus;
use App\Http\Command\CreateClassmentCommand;
use App\Http\Command\DeleteClassmentCommand;
use App\Http\Command\UpdateClassmentCommand;
use App\Http\Controllers\Controller;
use App\Http\Query\GetAllClassment;
use App\Http\Query\GetOneCLassment;
use App\Models\Classment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClassmentController extends Controller
{

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
        $query = new GetAllClassment();

        return new JsonResponse($query->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "victoires" => "required|integer",
            "defaites" => "required|integer",
            "nuls" => "required|integer",
            "pour" => "required|integer",
            "contre" => "required|integer",
            "goal_average" => "required|integer",
            "bonus" => "required|integer",
            "points" => "required|integer",
            "classement" => "required|integer",
            "team_id" => 'required|integer|exists:teams,id',
            "league_id" => 'required|integer|exists:leagues,id'
        ]);

        $this->commandBus->handle(new CreateClassmentCommand(
            $validated['victoires'],
            $validated['defaites'],
            $validated['nuls'],
            $validated['pour'],
            $validated['contre'],
            $validated['goal_average'],
            $validated['bonus'],
            $validated['points'],
            $validated['classement'],
            $validated['team_id'],
            $validated['league_id']
        ));
        return new JsonResponse(("Le classement a eté créé"), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $query = new GetOneCLassment($id);
        return new JsonResponse($query->get(),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $request->validate([
            "victoires" => "nullable|integer",
            "defaites" => "nullable|integer",
            "nuls" => "nullable|integer",
            "pour" => "nullable|integer",
            "contre" => "nullable|integer",
            "goal_average" => "nullable|integer",
            "bonus" => "nullable|integer",
            "points" => "nullable|integer",
            "classement" => "nullable|integer",
            "team_id" => 'nullable|integer|exists:teams,id',
            "league_id" => 'nullable|integer|exists:leagues,id'
        ]);

        $this->commandBus->handle(new UpdateClassmentCommand(
            $id,
            $validated['victoires'],
            $validated['defaites'],
            $validated['nuls'],
            $validated['pour'],
            $validated['contre'],
            $validated['goal_average'],
            $validated['bonus'],
            $validated['points'],
            $validated['classement'],
            $validated['team_id'],
            $validated['league_id']
        ));

        return new JsonResponse("Le classement avec l'id".$id." a bien été modifié", 200 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->commandBus->handle(new DeleteClassmentCommand($id));

        return new JsonResponse("Le classement avec l'id ".$id." a bien été supprimé.", 200);
    }
}
