<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/employe', function () {
    return view('employe');
});

/*Auth::routes();

Route::post('/api/cargos/cargar', 'CargosController@load');
Route::put('api/cargo/update', 'CargosController@update');
Route::delete('api/cargo/delete', 'CargosController@delete');*/

Auth::routes();

Route::post('/api/cargos/cargar', [App\Http\Controllers\CargosController::class, 'load'])->name('cargar');
Route::get('/api/cargos/actualizar', [App\Http\Controllers\CargosController::class, 'update'])->name('actualizar');
Route::delete('/api/cargos/borrar', [App\Http\Controllers\CargosController::class, 'delete'])->name('borrar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
