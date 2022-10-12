<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabController;

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

Route::get('/', [TabConroller::class, 'index']);
Route::get('/fruits_vegetables', [TabController::class, 'fruits_vegetables']);