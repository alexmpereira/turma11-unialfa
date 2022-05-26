<?php

use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');

Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
Route::delete('series/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');

Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index'])->name('temporadas.index');

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index'])->name('episodios.index');
Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);

