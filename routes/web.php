<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ClubController;
use app\Http\Controllers\TeamController;

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

//Route::get('clubs', [ClubController::class, 'clubs']);
//Route::get('teams', [TeamController::class, 'teams']);
Route::get('home', 'App\Http\Controllers\ClubController@clubs');
Route::get('teams', 'App\Http\Controllers\TeamController@teams');
<<<<<<< HEAD
Route::get('', 'App\Http\Controllers\ImagesController@logo');
=======
Route::get('', 'ImagesController@logo');
>>>>>>> e4e05cb6cc6ed1c5b1f82058258b80a11675c4cb
