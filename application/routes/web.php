<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\User\RegisterController;

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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/eventos', [EventController::class, 'index'])->name('event.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout.store');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/cadastro', [RegisterController::class, 'store'])->name('cadastro.store');
Route::get('/cadastro', [RegisterController::class, 'create'])->name('cadastro.create');

Route::get('/', function () {
    // return view('components.layout');
    return view('index');
})->name('index');
