<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilialController;
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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FilialController::class, 'index'])->name('filiais.index');
Route::get('filiais/create', [FilialController::class, 'create'])->name('filiais.create');    
Route::get('filiais/{id}/edit', [FilialController::class, 'edit'])->name('filial.edit');
Route::get('filiais/{id}', [FilialController::class, 'show'])->name('filiais.show');

Route::post('/', [FilialController::class, 'store'])->name('filial.store');
Route::put('/{id}', [FilialController::class, 'update'])->name('filial.update');
Route::delete('/{id}', [FilialController::class, 'destroy'])->name('filial.destroy');
        
