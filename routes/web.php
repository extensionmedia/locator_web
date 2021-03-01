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

/** Client Routes */
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::post('/client/edit/{client}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');

/** Finance Routes */
Route::get('/finance', [App\Http\Controllers\FinanceAccountController::class, 'index'])->name('finance.index');
Route::get('/finance/mouvements/totalByYear/{year}', [App\Http\Controllers\FinanceAccountMouvementController::class, 'totalByYear']);
Route::get('/finance/mouvements/totalByYearAndMonth/{year}', [App\Http\Controllers\FinanceAccountMouvementController::class, 'totalByYearAndMonth']);

/** Depenses Routes */
Route::get('/depense', [App\Http\Controllers\FinanceAccountMouvementController::class, 'depense_index'])->name('depense.index');
Route::get('/depense/create', [App\Http\Controllers\FinanceAccountMouvementController::class, 'depense_create'])->name('depense.create');
Route::post('/depense/edit/{depense}', [App\Http\Controllers\FinanceAccountMouvementController::class, 'depense_edit'])->name('depense.edit');
Route::post('/depense/store', [App\Http\Controllers\FinanceAccountMouvementController::class, 'depense_store'])->name('depense.store');

/** Rent Routes */
Route::get('/rent', [App\Http\Controllers\CarRentController::class, 'index'])->name('rent.index');
Route::post('/rent/edit/{rent}', [App\Http\Controllers\CarRentController::class, 'edit'])->name('rent.edit');
Route::get('/rent/totalRents', function(){
    return App\Models\FinanceAccountMouvement::where('account_mouvement_in', '>', 0)->sum('account_mouvement_in');
});
Route::get('/rent/countRents', function(){
    return App\Models\CarRent::whereYear('car_rent_start_date', '2019')->count();
});
Route::get('/rent/countClients', function(){
    return App\Models\Client::count();
});
Route::get('/rent/totalDepenses', function(){
    return App\Models\FinanceAccountMouvement::where('account_mouvement_out', '>', 0)->sum('account_mouvement_out');
});
Route::get('/comment', function(){
    return view('comment');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/test', [App\Http\Controllers\CarRentController::class, 'get_by_year_month']);
