<?php

use App\Http\Controllers\SerieController;
use App\Http\Controllers\TemporadasController;
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


Route::get('/serie', [SerieController::class, 'index'])->name('serie.index');
Route::get('/serie/create', [SerieController::class, 'create'])->name('serie.create');

Route::post('/serie', [SerieController::class, 'store'])->name('serie.store');
Route::delete('/serie/{id}',[SerieController::class, 'destroy'])->name('serie.destroy');

Route::get('/serie/{serieId}/temporadas', [TemporadasController::class, 'index'])->name('temporadas.index');

Route::post('/serie/{id}/editaNome', [SerieController::class, 'editaNome']);

