<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('customers.depan');
})->name('customer.depan');

Route::get('/customer/tiktok', [CustomerController::class, 'tiktok'])->name('customer.tiktok');
Route::get('/customer/instagram', [CustomerController::class, 'instagram'])->name('customer.instagram');

Route::get('/customer/community', [CustomerController::class, 'community'])->name('customer.community');
Route::get('/customer/review', [CustomerController::class, 'review'])->name('customer.review');
Route::get('/customer/fillReview', [CustomerController::class, 'fillReview'])->name('customer.fillReview');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
