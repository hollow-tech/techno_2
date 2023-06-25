<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FullTestController;
use App\Http\Controllers\AdminAuthController;


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

Route::get('/', [ProductController::class, 'home'])->name('products');

Route::get('/products/{id}', [ProductController::class, 'page']);



Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('adminLoginShow');
    Route::post('/login', [AdminAuthController::class, 'adminLoginForm'])->name('adminLoginForm');
});









// cart

Route::get('/cart', [CartItemController::class, 'showCart']);


Route::post('/cart', [CartItemController::class, 'addToCart'])->name('addToCart');

Route::put('/cartAdd/{itemId}', [CartItemController::class, 'increaseCartItemQuantity']);


Route::delete('/cartDelete/{id}', [CartItemController::class, 'deleteCartItem']);

Route::put('/cartMinus/{itemId}', [CartItemController::class, 'decreaseCartItemQuantity']);

Route::get('cart-items/{id}/increase', [CartItemController::class, 'increaseCartItem'])->name('increaseCartItem');


Route::post('/checkout',[CheckoutController::class, 'checkout'])->name('checkout');



// sliders


Route::get('/slider', function () {
    return Inertia::render('slider');
});
Route::get('/bslider', function () {
    return Inertia::render('blockSlider');
});













Route::get('/api/products', [ProductController::class, 'home']);


Route::get('/api/users', [UserController::class, 'index']);



