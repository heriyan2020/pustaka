<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransaksiController;

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


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'registersimpan']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'loginsimpan']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::resource('/book', App\Http\Controllers\BookController::class);

Route::resource('/student', App\Http\Controllers\StudentController::class);

Route::resource('/pustaka', App\Http\Controllers\PustakaController::class);

Route::resource('/borrow', App\Http\Controllers\BorrowController::class);