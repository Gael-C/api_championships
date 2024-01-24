<?php

use App\Http\Controllers\API\ClassmentController;
use App\Http\Controllers\API\LeagueController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MatchController;
use App\Http\Controllers\API\MatchWeekController;
use App\Http\Controllers\API\SeasonController;
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
        'teams' => TeamController::class,
        'leagues' => LeagueController::class,
        'seasons' => SeasonController::class,
        'matchWeek' => MatchWeekController::class,
        'matches' => MatchController::class,
        'classement' => ClassmentController::class,
        'register' => AuthController::class
    ]);
});

// Routes publiques
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/{team}', [TeamController::class, 'show']);

Route::get('/leagues', [LeagueController::class, 'index']);
Route::get('/leagues/{league}', [LeagueController::class, 'show']);

Route::get('/seasons', [SeasonController::class, 'index']);
Route::get('/seasons/{seasons}', [SeasonController::class, 'show']);

Route::get('/matchWeek', [MatchWeekController::class, 'index']);
Route::get('/matchWeek/{matchWeek}', [MatchWeekController::class, 'show']);

Route::get('/matches', [MatchController::class, 'index']);
Route::get('/matches/{match}', [MatchController::class, 'show']);

Route::get('/classement', [ClassmentController::class, 'index']);
Route::get('/classement/{id}', [ClassmentController::class, 'show']);

Route::post('/login', [AuthController::class, 'login'])->name('login');





