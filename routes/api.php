<?php

use App\Http\Controllers\API\LeaguesController;
use App\Http\Controllers\API\PicturesController;
use App\Http\Controllers\API\TeamsController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MatchsController;
use App\Http\Controllers\API\MatchWeekController;
use App\Http\Controllers\API\SeasonController;
use App\Models\MatchWeek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Routes protégées
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'teams' => TeamsController::class,
        'leagues' => LeaguesController::class,
        'pictures' => PicturesController::class,
        'seasons' => SeasonController::class,
        'matchWeek' => MatchsController::class,
        'match' => MatchsController::class
    ]);
});

// Routes publiques
Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/teams/{team}', [TeamsController::class, 'show']);

Route::get('/leagues', [LeaguesController::class, 'index']);
Route::get('/leagues/{league}', [LeaguesController::class, 'show']);

Route::get('/pictures', [PicturesController::class, 'index']);
Route::get('/pictures/{picture}', [PicturesController::class, 'show']);

Route::get('/seasons', [SeasonController::class, 'index']);
Route::get('/seasons/{seasons}', [SeasonController::class, 'show']);

Route::get('/matchWeek', [MatchWeekController::class, 'index']);
Route::get('/matchWeek/{matchWeek}', [MatchWeekController::class, 'show']);

Route::get('/match', [MatchsController::class, 'index']);
Route::get('/match/{match}', [MatchsController::class, 'show']);

Route::post('/register', [AuthController::class, 'register'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login'])->name('login');





