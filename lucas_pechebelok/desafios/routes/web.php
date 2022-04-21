<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;

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

Route::get('/students', [EstudanteController::class, 'index'])->name('students.index');
Route::get('/students/create', [EstudanteController::class, 'create'])->name('students.create');
Route::get('/students/{id}', [EstudanteController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [EstudanteController::class, 'edit'])->name('students.edit');

Route::post('/students', [EstudanteController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [EstudanteController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [EstudanteController::class, 'destroy'])->name('students.destroy');
