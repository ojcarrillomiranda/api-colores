<?php

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
Route::resource('colores', 'App\Http\Controllers\ColorController');

// Route::get('/colores', 'App\Http\Controllers\ColorController@index');
// Route::post('/colores', 'App\Http\Controllers\ColorController@store');
// Route::get('/colores/{id}', 'App\Http\Controllers\ColorController@show');
// Route::put('/colores/{id}', 'App\Http\Controllers\ColorController@update');
// Route::delete('/colores/{id}', 'App\Http\Controllers\ColorController@destroy');

