<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Test\FullTestController;
use App\Http\Controllers\Admin\Test\TestSubjectController;
use App\Http\Controllers\Admin\Test\TestLanguageController;
use App\Http\Controllers\Admin\Test\TestQuestionController;



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

Route::get('/', function () {
    return Inertia::render('Admin/home');
})->name('index');



Route::get('/products', [ProductController::class, 'index'])->name('products');



Route::get('/orders', function () {
    return Inertia::render('Admin/adminOrders');
})->name('orders');



Route::get('/users', [UserController::class, 'index'])->name('users');

//Route::middleware('adminAuth')->group(function () {
//    Route::resource('roles', RoleController::class)->except(['show'])->names('roles');
//});
