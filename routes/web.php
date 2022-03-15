<?php

use Illuminate\Support\Facades\Route;
use App\Models\Clientes;
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
Route::get('/pruebasClientes', function(){
    $clientes = Clientes::obtenerClientes();
    dd($clientes);
});
