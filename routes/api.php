<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TrouverVoitureController;
use App\Http\Controllers\TrouverLocation;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clients',[ClientController::class, 'index']);
Route::get('client/{id}',[ClientController::class, 'show']);
Route::post('client',[ClientController::class, 'store']);
Route::put('client{id}',[ClientController::class, 'update']);
Route::delete('client{id}',[ClientController::class, 'destroy']);

Route::get('locations',[LocationController::class, 'index']);
Route::get('location/{id}',[LocationController::class, 'show']);
Route::post('location',[LocationController::class, 'store']);
Route::put('location{id}',[LocationController::class, 'update']);
Route::delete('location{id}',[LocationController::class, 'destroy']);

Route::get('voitures',[VoitureController::class, 'index']);
Route::get('voiture/{id}',[VoitureController::class, 'show']);
Route::post('voiture',[VoitureController::class, 'store']);
Route::put('voiture{id}',[VoitureController::class, 'update']);
Route::delete('voiture{id}',[VoitureController::class, 'destroy']);

Route::get('Members',[FindController::class, 'index']);

Route::get('Members',[TrouverVoitureController::class, 'index']);

Route::get('Members',[TrouverLocationController::class, 'index']);


