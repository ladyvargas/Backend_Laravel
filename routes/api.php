<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Clientes;

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

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('index');
Route::get('/clientes/{id}', 'App\Http\Controllers\ClientesController@show')->name('show');

Route::get('/libros', 'App\Http\Controllers\LibrosController@index')->name('index');
Route::get('/libros/{id}', 'App\Http\Controllers\LibrosController@show')->name('show');
