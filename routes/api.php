<?php

use App\Http\Controllers\API\LeaguesController;
use App\Http\Controllers\API\PicturesController;
use App\Http\Controllers\API\TeamsController;
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

Route::apiResources([
    'teams' => TeamsController::class,
    'leagues' => LeaguesController::class,
    'pictures' => PicturesController::class
]);
