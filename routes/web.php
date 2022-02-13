<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fallecidos\FallecidosController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fallecidos/index', [FallecidosController::class, 'index'])->name('fallecidos.index');
Route::get('/fallecidos/create', [FallecidosController::class, 'create'])->name('fallecidos.create');
Route::post('/fallecidos/store', [FallecidosController::class, 'store'])->name('fallecidos.store');
Route::get('/fallecidos/edit/{id}', [FallecidosController::class, 'edit'])->name('fallecidos.edit');
Route::put('/fallecidos/update/{fallecido}', [FallecidosController::class, 'update'])->name('fallecidos.update');
Route::delete('/fallecidos/destroy/{id}', [FallecidosController::class, 'destroy'])->name('fallecidos.destroy');
