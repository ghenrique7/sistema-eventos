<?php

use App\Http\Controllers\Admin\AdminEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Subscribe\SubscribeEventController;
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

Route::prefix('admin')->middleware(['auth', 'eh_admin'])->group(function () {
    Route::get('/eventos', [AdminEventController::class, 'index'])->name('event.index');
    Route::delete('/eventos/{evento}', [AdminEventController::class, 'destroy'])->name('event.destroy');
    Route::get('/eventos/{evento}/edit', [AdminEventController::class, 'edit'])->name('event.edit');
    Route::put('/eventos/{evento}', [AdminEventController::class, 'update'])->name('event.update');
    Route::post('/adicionar-evento', [AdminEventController::class, 'store'])->name('event.store');
    Route::get('/adicionar-evento', [AdminEventController::class, 'create'])->name('event.create');
});

Route::prefix('inscrever')->middleware('auth')->group(function () {
    Route::get('/{evento}', [SubscribeEventController::class, 'index'])->name('subscribe.index');
    Route::post('/{evento}', [SubscribeEventController::class, 'store'])->name('subscribe.store');
});

Route::get('/eventos/{evento}', [EventController::class, 'show'])->name('event.show');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout.store');

Route::get('minha-conta/{usuario}', [UserController::class, 'show'])->name('usuario.show');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/cadastro', [RegisterController::class, 'store'])->name('cadastro.store');
Route::get('/cadastro', [RegisterController::class, 'create'])->name('cadastro.create');


Route::get('/', [EventController::class, 'index'])->name('index');
