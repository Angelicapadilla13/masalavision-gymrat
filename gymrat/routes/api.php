<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ChestController;
use App\Http\Controllers\ShoulderController;
use App\Http\Controllers\TricepController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\LegController;
use App\Http\Controllers\BicepController;
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


Route::apiResource('user', UserController::class);
Route::apiResource('program', ProgramController::class);
Route::apiResource('chest', ChestController::class);
Route::apiResource('shoulder', ShoulderController::class);
Route::apiResource('tricep', TricepController::class);
Route::apiResource('bicep', BicepController::class);
Route::apiResource('back', BackController::class);
Route::apiResource('leg', LegController::class);