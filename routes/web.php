<?php

use App\Http\Controllers\Web\Site\Auth\LoginController;
use App\Http\Controllers\Web\Site\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('index');

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->prefix('/login')->as('login.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'login')->name('login');
    });

    Route::controller(RegisterController::class)->prefix('/register')->as('register.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'register')->name('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
