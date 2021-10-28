<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TrouverClientController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TrouverVoitureController;
use App\Http\Controllers\TrouverLocation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get("/search",'FindController@index');

Route::resource('clients', 'ClientController');
Route::resource('voitures', 'VoitureController');
Route::resource('TrouverVoiture', 'TrouverVoitureController');
Route::resource('TrouverLocation', 'TrouverLocationController');
Route::resource('locations', 'LocationController');
Route::resource('TrouverClient', 'TrouverClientController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


