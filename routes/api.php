<?php

use App\Http\Controllers\API\LeaguesController;
use App\Http\Controllers\API\PicturesController;
use App\Http\Controllers\API\TeamsController;
use App\Http\Controllers\API\AuthController;
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
        'pictures' => PicturesController::class
    ]);
});

// Routes publiques
Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/teams/{team}', [TeamsController::class, 'show']);

Route::get('/leagues', [LeaguesController::class, 'index']);
Route::get('/leagues/{league}', [LeaguesController::class, 'show']);

Route::get('/pictures', [PicturesController::class, 'index']);
Route::get('/pictures/{picture}', [PicturesController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');





