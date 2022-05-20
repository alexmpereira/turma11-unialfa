<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;

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

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index'])->name('temporadas.index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');
Route::get('/series/{id}/edit', [SeriesController::class, 'edit'])->name('series.edit');

Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
Route::post('/series/{id}/editaNome', [SeriesController::class, 'editaNome']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');
Route::put('/series/{id}', [SeriesController::class, 'update'])->name('series.update');
