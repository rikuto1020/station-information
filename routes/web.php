<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'App\Http\Controllers\UserController@index');
Route::post('/index', 'App\Http\Controllers\UserController@index');
Route::get('user/registration', 'App\Http\Controllers\UserController@registration');

Route::get('station/list', 'App\Http\Controllers\StationController@list');
Route::post('station/list', 'App\Http\Controllers\StationController@list');


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
