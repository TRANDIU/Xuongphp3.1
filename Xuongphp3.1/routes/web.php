<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('/', function () {
    return view('welcome');
});
// dungf chung một đg link nhưng khác method
Route::get('auth/login', [LoginController::class, 'index'])->name('login.index');
Route::post('auth/login', [LoginController::class, 'login'])->name('login');
Route::get('auth/logout', [LoginController::class, 'logout'])->name('logout');
// Register
Route::get('auth/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('auth/register', [LoginController::class, 'register'])->name('register');