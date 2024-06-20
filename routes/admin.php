<?php

use App\Http\Controllers\Web\Admin\ContactController;
use App\Http\Controllers\Web\Admin\EventController;
use App\Http\Controllers\Web\Admin\HomeController;
use App\Http\Controllers\Web\Admin\JobOfferController;
use App\Http\Controllers\Web\Admin\SiminarController;
use App\Http\Controllers\Web\Admin\TripController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->name('index');

Route::resource('events', EventController::class);

Route::resource('siminars', SiminarController::class);

Route::resource('trips', TripController::class);

Route::resource('job-offers', JobOfferController::class);

Route::get('/contacts', ContactController::class)->name('contacts.index');
