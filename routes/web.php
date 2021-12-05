<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;

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

Auth::routes();

// Middleware auth
Route::middleware('auth')->group(function () {
    // Home Page
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/{slug}/branches', [HotelController::class, 'index'])->name('hotel_branches');
    Route::get('/{slug}/branches/{id}', [HotelController::class, 'rooms'])->name('hotel_branches');
    Route::get('/{slug}/branches/{id}/rooms', [HotelController::class, 'rooms'])->name('hotel_branch_rooms');
});
