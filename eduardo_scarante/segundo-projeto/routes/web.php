<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/series',[SeriesController::class, 'index'])->name('series.index');
Route::get('series/create',[SeriesController::class,'create'])->name('series.create');

Route::post('series', [SeriesController::class,'store'])->name('series.store');