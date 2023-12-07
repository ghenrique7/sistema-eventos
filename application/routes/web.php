<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('cadastro.store');
Route::get('/cadastro', [RegisterController::class, 'create'])->name('cadastro.create');

Route::get('/', function () {
    // return view('components.layout');
    return view('index');
});
