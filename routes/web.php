<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
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

Route::get('/', [EmpleadosController::class, 'index']);
Route::get('empleados', [EmpleadosController::class, 'index']);
Route::post('registro', [EmpleadosController::class, 'store'])->name('registro');
Route::delete('delete/{id}', [EmpleadosController::class, 'destroy'])->name('delete');
Route::post('show/{id}', [EmpleadosController::class, 'show']);
Route::post('update/{id}', [EmpleadosController::class, 'update']);




