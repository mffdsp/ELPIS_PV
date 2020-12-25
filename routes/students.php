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


Route::get('/', 'StudentController@index');
Route::post('/', 'StudentController@store');


Route::delete('/{id}', 'StudentController@delete');
Route::get('/{id}', 'StudentController@read');
Route::put('/', 'StudentController@update');
