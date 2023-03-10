<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
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

Route::get('/', [SaleController::class, 'index'])->name('index');
Route::get('/sales/home', [SaleController::class, 'home'])->name('home');
Route::get('/sales/sell', [SaleController::class, 'sell'])->name('sell');
Route::post('/sales/sell', [SaleController::class, 'upload'])->name('upload');
Route::get('/sales/{product}', [SaleController::class, 'show'])->name('show');
Route::post('/sales/{product}/payment', [SaleController::class, 'payment'])->name('payment');
Route::get('/sales/complete', [SaleController::class, 'complete'])->name('complete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

