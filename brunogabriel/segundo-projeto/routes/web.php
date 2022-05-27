<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\EpisodiosController;
use App\Http\Controllers\RegistroController;
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
Route::get('/entrar', [EntrarController::class, 'index'])->name('login');
Route::post('/entrar', [EntrarController::class, 'entrar']);
Route::get('/registrar', [RegistroController::class, 'create']);
Route::post('/registrar', [RegistroController::class, 'store']);


Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index'])->name('temporadas.index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('series.create');
Route::get('/series/{id}/edit', [SeriesController::class, 'edit'])->name('series.edit');
Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
Route::post('/series/{id}/editaNome', [SeriesController::class, 'editaNome']);
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');
Route::put('/series/{id}', [SeriesController::class, 'update'])->name('series.update');

Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index']);
Route::post('/temporadas/{temporada}/episodios/assistir', [EpisodiosController::class, 'assistir']);

Route::get('/sair', function() {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});
