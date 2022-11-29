<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', [TabController::class, 'index']);
Route::get('/fruits_vegetables', [TabController::class, 'fruits_vegetables']);
Route::get('/meats', [TabController::class, 'meats']);
Route::get('/dairy', [TabController::class, 'dairy']);
Route::get('/snacks', [TabController::class, 'snacks']);
Route::get('/drinks', [TabController::class, 'drinks']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/order_history', [OrderController::class, 'index'])->middleware('auth');
Route::get('/order/{id}', [OrderController::class, 'order'])->middleware('auth');
Route::post('/logout', [LogoutController::class, 'logout']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/signup', [SignupController::class, 'create']);
Route::post('/delete_item', [CartController::class, 'delete'])->middleware('auth');
Route::post('/add_to_cart', [CartController::class, 'add'])->middleware('auth');
Route::post('/checkout', [CheckoutController::class, 'index'])->middleware('auth');