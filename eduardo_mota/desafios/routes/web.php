<?php

use App\Http\Controllers\EstudanteController;
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

Route::get('/estudante', [EstudanteController::class, 'index'])->name('estudante.index');
Route::get('/estudante/{id}', [EstudanteController::class, 'show'])->name('estudante.show');
Route::get('/estudante/{id}/edit',[EstudanteController::class, 'edit'])->name('estudante.edit');
Route::get('/estudante/novo', [EstudanteController::class , 'new'])->name('estudante.new');


Route::put('/estudante/{id}', [EstudanteController::class, 'update'])->name('estudante.update');
Route::post('/estudante', [EstudanteController::class, 'create'])->name('estudante.create');
Route::delete('/estudante/{id}', [EstudanteController::class], 'delete')->name('estudante.destroy');


// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');