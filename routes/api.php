<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
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

/**
 * 
 */
Route::post('/checkout_complete', function(Request $request) {
    $event = $request->type;
    switch ($event) {
        case "checkout.session.completed":
            $customer = $request['data']['object']['customer'];
            $user = User::where('customer_id', '=', $customer)->first();
            $cart_items = CartItem::where('user_id', '=', $user->id)->get();
            CartItem::destroy($cart_items); // Deletes items in the cart
            // Create order
            $order = Order::create(['user_id' => $user->id]);
            // Create order items with the cart items
            foreach($cart_items as $cart_item) {
                OrderItem::create(['order_id' => $order->id, 'product_id' => $cart_item->product_id, 'quantity' => $cart_item->quantity, 'price' => $cart_item->product->price]);
            }
            // Send email receipt
            break;
        default: break;
    }
    return;
});