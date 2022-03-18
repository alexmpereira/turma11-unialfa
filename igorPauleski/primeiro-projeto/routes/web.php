<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::get('/clients', [ClienteController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClienteController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClienteController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClienteController::class, 'store'])->name('clients.store');
