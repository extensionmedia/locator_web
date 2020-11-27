<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

/** User Routes */
Route::get('/user/edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

/** Car Routes */
Route::get('/park-auto', [App\Http\Controllers\CarController::class, 'index'])->name('car.index');
Route::post('/park-auto/edit/{car}', [App\Http\Controllers\CarController::class, 'edit'])->name('car.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
