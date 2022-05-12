<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudantesController;

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

Route::get('/estudantes', [EstudantesController::class, 'index'])->name('estudantes.index');
Route::get('/estudantes/create', [EstudantesController::class, 'create'])->name('estudantes.create');
Route::get('/estudantes/{id}', [EstudantesController::class, 'show'])->name('estudantes.show');
Route::get('/estudantes/{id}/edit', [EstudantesController::class, 'edit'])->name('estudantes.edit');

Route::post('/estudantes', [EstudantesController::class, 'store'])->name('estudantes.store');
Route::put('/estudantes/{id}', [EstudantesController::class, 'update'])->name('estudantes.update');
Route::delete('/estudantes/{id}', [EstudantesController::class, 'destroy'])->name('estudantes.destroy');
