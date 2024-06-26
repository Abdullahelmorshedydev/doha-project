<?php

use App\Http\Controllers\Web\Site\AboutUsController;
use App\Http\Controllers\Web\Site\Auth\LoginController;
use App\Http\Controllers\Web\Site\Auth\RegisterController;
use App\Http\Controllers\Web\Site\CalenderController;
use App\Http\Controllers\Api\Site\CalenderController as ApiCalenderController;
use App\Http\Controllers\Web\Site\HomeController;
use App\Http\Controllers\Web\Site\JobOfferController;
use App\Http\Controllers\Web\Site\SiminarController;
use App\Http\Controllers\Web\Site\TripController;
use App\Http\Controllers\Web\Site\FeedbackController;
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

Route::get('/', HomeController::class)->name('index');
Route::get('/about-us', AboutUsController::class)->name('aboutus.index');
Route::get('/siminar', SiminarController::class)->name('siminar.index');
Route::get('/job-offer', JobOfferController::class)->name('joboffer.index');
Route::get('/trip', TripController::class)->name('trip.index');
Route::get('/feedback', FeedbackController::class)->name('feedback.index');

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

    Route::get('/api/calender', [ApiCalenderController::class, 'index'])->name('get');
    Route::controller(CalenderController::class)->prefix('/calender')->as('calender.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
    });
});
