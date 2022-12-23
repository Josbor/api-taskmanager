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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tareas','App\Http\Controllers\TareaController@index');//mostrar todos los registros
Route::post('/tareas','App\Http\Controllers\TareaController@store');// crear un registro
Route::put('/tareas/{id}','App\Http\Controllers\TareaController@update');// Actualizar un registro
Route::delete('/tareas/{id}','App\Http\Controllers\TareaController@destroy');// Actualizar un registro