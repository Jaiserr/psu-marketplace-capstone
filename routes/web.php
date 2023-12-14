<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryProductsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\WishlistController;
use App\Models\Products;
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
    $products = Products::all();
    return view('welcome', compact('products'));
})->name('home');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/privacy-policy', [DashboardController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [DashboardController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::post('/contact-us', [ContactUsController::class, 'submitForm']);
Route::get('/category-products', [CategoryProductsController::class, 'index'])->name('category-products');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/seller-profile', SellerProfileController::class);
    Route::resource('/reviews', ReviewsController::class);

    Route::get('/wishlists', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{product}',[WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
    Route::get('product-details/{id}', [ProductsController::class, 'productDetails'])->name('product.details');
    // Route::get('product/category/{id}', [ProductsController::class, 'product-category'])->show('product.category');
    Route::get('/products/{category}', [ProductsController::class, 'indexByCategory'])->name('products.by.category');
    Route::get('/search', [ProductsController::class, 'search'])->name('product.search');
});

// ** Route for superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator', 'verified']], function() {
    Route::post('approve-seller', [DashboardController::class, 'approve'])->name('approve-seller');
    Route::post('block-seller', [DashboardController::class, 'block'])->name('block-seller');
    Route::delete('user-delete/{customer}', [RegisteredUserController::class, 'destroy'])->name('delete-seller');
    Route::resource('students', StudentController::class);
    Route::post('approve-product', [DashboardController::class, 'approveProduct'])->name('approve-product');
    Route::post('block-product', [DashboardController::class, 'blockProduct'])->name('block-product');
    Route::get('sales/{id}', [SalesController::class, 'show'])->name("sales.show");
});

// ** Route for superadministrator
Route::group(['middleware' => ['auth', 'role:superadministrator|seller', 'verified']], function() {
    Route::resource('admin-products', ProductsController::class);
    Route::get('/sellers', [SellerController::class, 'index'])->name('sellers');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
});

// ** Route for seller
Route::group(['middleware' => ['auth', 'role:customer', 'verified']], function() {

});
// ** Route for seller
Route::group(['middleware' => ['auth', 'role:seller', 'verified']], function() {

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    // Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::get('{thread}/create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});

require __DIR__.'/auth.php';
