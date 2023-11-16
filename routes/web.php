<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'submitForm']);

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ** Route for superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator', 'verified']], function() {


});

// ** Route for seller
Route::group(['middleware' => ['auth', 'role:seller', 'verified']], function() {
    Route::resource('admin-products', ProductsController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
