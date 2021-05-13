<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitaController;
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
Route::get('/registrar', function () {
    return view('vehiculos.create');
});
Route::get('/index', function () {
    return view('vehiculos.index');
});
Route::resource('vehiculos',VehiculoController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('categorias',CategoriaController::class);
Route::resource('citas',CitaController::class);