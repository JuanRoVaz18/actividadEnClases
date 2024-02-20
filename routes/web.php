<?php

use App\Http\Controllers\ProyectoController;
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

Route::resource("proyecto", ProyectoController::class);

// Elimina las rutas duplicadas y utiliza solo las definiciones de resource

// Route::get("proyecto/update",[ProyectoController::class,"update"])->name("proyecto.update");
// Route::post("proyecto/update",[ProyectoController::class,"update"])->name("proyecto.update");

// Route::get("proyecto/create",[ProyectoController::class,"create"])->name("proyecto.create");
// Route::post("proyecto/create",[ProyectoController::class,"create"])->name("proyecto.store");

Route::get("proyecto/delete",[ProyectoController::class,"destroy"])->name("proyecto.delete");
Route::post("proyecto/delete",[ProyectoController::class,"destroy"])->name("proyecto.delete");

// Route::get("proyecto/edit",[ProyectoController::class,"edit"])->name("proyecto.update");
// Route::post("proyecto/edit",[ProyectoController::class,"edit"])->name("proyecto.update");

