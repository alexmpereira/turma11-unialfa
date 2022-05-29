<?php

use App\Http\Controllers\SerieController;
use App\Http\Controllers\TemporadaController;
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

/*ABRIR AS VIEWS*/ 
/*Cria a rota*/ /*metodo da rota*/ /*caminho da rota*/ /*Apontamento da controller e do método*/ /*nome da rota*/
Route::get('/series', [SerieController::class, 'index'])->name('series.index');
Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');
Route::get('/series/{id}', [SerieController::class, 'show'])->name('series.show');
Route::get('/series/{serieId}/temporadas', [TemporadaController::class, 'index'])->name('temporadas.index');

/*FUNÇÕES DE GERENCIAMENTO*/
/*Cria a rota*/ /*metodo da rota*/ /*caminho da rota*/ /*Apontamento da controller e do método*/ /*nome da rota*/
Route::post('/series', [SerieController::class, 'store'])->name('series.store');
Route::delete('/series/{id}', [SerieController::class, 'destroy'])->name('series.destroy');
