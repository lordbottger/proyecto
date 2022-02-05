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

Route::get('/v1/productos', [ProductosController::class, 'getAll']);
Route::get('/v1/productos/{id}', [ProductosController::class, 'getItem']);
Route::post('/v1/productos', [ProductosController::class, 'store']);
Route::put('/v1/productos', [ProductosController::class, 'update']);
Route::patch('/v1/productos', [ProductosController::class, 'patch']);
Route::delete('/v1/productos/{id}', [ProductosController::class, 'delete']);


Route::get('/v1/usuarios', [ProductosController::class, 'getAll']);
Route::get('/v1/usuarios/{id}', [ProductosController::class, 'getItem']);
Route::post('/v1/usuarios', [ProductosController::class, 'store']);
Route::put('/v1/usuarios', [ProductosController::class, 'update']);
Route::patch('/v1/usuarios', [ProductosController::class, 'patch']);
Route::delete('/v1/usuarios/{id}', [ProductosController::class, 'delete']);



