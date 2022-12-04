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

Route::get('/home', function () {
    return view('home');
});

Route::get('/employe', function () {
    return view('employe');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/cargo', function () {
    return view('cargo');
});

Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/factura', function () {
    return view('factura');
});

Route::get('/dailybook', function () {
    return view('dailybook');
});

//Route Cargos

Auth::routes();

Route::get('/api/cargos/index', [App\Http\Controllers\CargosController::class, 'index'])->name('index');
Route::get('/api/cargos/select', [App\Http\Controllers\CargosController::class, 'select'])->name('select');
Route::post('/api/cargos/cargar', [App\Http\Controllers\CargosController::class, 'load'])->name('cargar');
Route::put('/api/cargos/actualizar', [App\Http\Controllers\CargosController::class, 'update'])->name('actualizar');
Route::delete('/api/cargos/borrar', [App\Http\Controllers\CargosController::class, 'delete'])->name('borrar');

//Routescustomer

Route::get('/api/customer/index', [App\Http\Controllers\CustomersController::class, 'index'])->name('index');
Route::get('/api/customer/select', [App\Http\Controllers\CustomersController::class, 'select'])->name('select');
Route::post('/api/customer/cargar', [App\Http\Controllers\CustomersController::class, 'load'])->name('cargar');
Route::put('/api/customer/actualizar', [App\Http\Controllers\CustomersController::class, 'update'])->name('actualizar');
Route::delete('/api/customer/borrar', [App\Http\Controllers\CustomersController::class, 'delete'])->name('borrar');

//Routesemploy
Route::get('/api/employe/index', [App\Http\Controllers\EmployesController::class, 'index'])->name('index');
Route::get('/api/employe/select', [App\Http\Controllers\EmployesController::class, 'select'])->name('select');
Route::post('/api/employe/cargar', [App\Http\Controllers\EmployesController::class, 'load'])->name('cargar');
Route::put('/api/employe/actualizar', [App\Http\Controllers\EmployesController::class, 'update'])->name('actualizar');
Route::delete('/api/employe/borrar', [App\Http\Controllers\EmployesController::class, 'delete'])->name('borrar');

//Routeschecks
Route::get('/api/factura/index', [App\Http\Controllers\ChecksController::class, 'index'])->name('index');
Route::get('/api/factura/select', [App\Http\Controllers\ChecksController::class, 'select'])->name('select');
Route::post('/api/factura/cargar', [App\Http\Controllers\ChecksController::class, 'load'])->name('cargar');
Route::put('/api/factura/actualizar', [App\Http\Controllers\ChecksController::class, 'update'])->name('actualizar');
Route::delete('/api/factura/borrar', [App\Http\Controllers\ChecksController::class, 'delete'])->name('borrar');

//RouteInventories 
Route::get('/api/inventories/index', [App\Http\Controllers\InventoriesController::class, 'index'])->name('index');
Route::get('/api/inventories/select', [App\Http\Controllers\InventoriesController::class, 'select'])->name('select');
Route::post('/api/inventories/cargar', [App\Http\Controllers\InventoriesController::class, 'load'])->name('cargar');
Route::put('/api/inventories/actualizar', [App\Http\Controllers\InventoriesController::class, 'update'])->name('actualizar');
Route::delete('/api/inventories/borrar', [App\Http\Controllers\InventoriesController::class, 'delete'])->name('borrar');

//RouteDailybook 
Route::get('/api/dailybook/index', [App\Http\Controllers\DailybookController::class, 'index'])->name('index');
Route::get('/api/dailybook/select', [App\Http\Controllers\DailybookController::class, 'select'])->name('select');
Route::post('/api/dailybook/cargar', [App\Http\Controllers\DailybookController::class, 'load'])->name('cargar');
Route::put('/api/dailybook/actualizar', [App\Http\Controllers\DailybookController::class, 'update'])->name('actualizar');
Route::delete('/api/dailybook/borrar', [App\Http\Controllers\DailybookController::class, 'delete'])->name('borrar');

Route::post('/post/{postId}', [App\Http\Controllers\HomeController::class, 'post'])->name('postImagen');
