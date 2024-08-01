<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth', AdminMiddleware::class])->group(function(){
    Route::get('index', [LoginController::class, 'index'])->name('index');
    Route::get('update', [LoginController::class, 'update'])->name('update');
});

Route::get('loginAdmin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'postRegister'])->name('postRegister');