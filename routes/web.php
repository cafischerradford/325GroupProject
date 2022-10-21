<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;

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
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);