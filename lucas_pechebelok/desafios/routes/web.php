<?php

<<<<<<< HEAD
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f

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

<<<<<<< HEAD
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
=======
Route::get('/students', [EstudanteController::class, 'index'])->name('students.index');
Route::get('/students/create', [EstudanteController::class, 'create'])->name('students.create');
Route::get('/students/{id}', [EstudanteController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [EstudanteController::class, 'edit'])->name('students.edit');

Route::post('/students', [EstudanteController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [EstudanteController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [EstudanteController::class, 'destroy'])->name('students.destroy');
>>>>>>> dc6d2954af9e7d7d3fe3866d42dcdaed0a358a3f
