<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\CartItem;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/update_item', function(Request $request) {
    $cart_item_id = $request->cart_item_id;
    $quantity = $request->quantity;

    $cart_item = CartItem::where('id', '=', $cart_item_id)->update(['quantity' => $quantity]);
    return;
});