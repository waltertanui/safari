<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tours', [DashboardController::class, 'tours'])->name('tours.index');
Route::get('/destinations', [DashboardController::class, 'destinations'])->name('destinations.index');
Route::get('/bookings', [DashboardController::class, 'bookings'])->name('bookings.index');
