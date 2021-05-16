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
Route::get('/registrarcita', function () {
    return view('citas.create');
});
Route::resource('vehiculos',VehiculoController::class)->middleware('auth');
Route::resource('clientes',ClienteController::class)->middleware('auth');
Route::resource('categorias',CategoriaController::class);
Route::resource('citas',CitaController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
