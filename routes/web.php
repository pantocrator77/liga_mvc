<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use app\Http\Controllers\ClubController;
use app\Http\Controllers\TeamController;
use app\Http\Controllers\GameController;

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

Route::get('home', 'App\Http\Controllers\ClubController@club')->name('club');
Route::get('teams', 'App\Http\Controllers\TeamController@teams')->name('vistateams');
Route::get('nuevopartido', 'App\Http\Controllers\GamesController@games')->name('vistagames');
Route::POST('nuevopartido', 'App\Http\Controllers\GamesController@storegames')->name('storegames');
Route::get('nuevoequipo', 'App\Http\Controllers\TeamController@formteam')->name('vistaaddteam');
Route::POST('nuevoequipo', 'App\Http\Controllers\TeamController@addteam')->name('nuevoequipo');


