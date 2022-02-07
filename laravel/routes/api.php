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

Route::get('/articulos','App\Http\Controllers\ArticuloController@index');//mostrar
Route::post('/articulos','App\Http\Controllers\ArticuloController@store');//guardar
Route::put('/articulos{id}','App\Http\Controllers\ArticuloController@update');//actualizar
Route::delete('/articulos{id}','App\Http\Controllers\ArticuloController@destroy');//eliminar

Route::get('/productos','App\Http\Controllers\ProductoController@index');//mostrar
Route::post('/productos','App\Http\Controllers\ProductoController@store');//guardar
Route::put('/productos{id}','App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/productos{id}','App\Http\Controllers\ProductoController@destroy');//eliminar