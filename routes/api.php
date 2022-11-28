<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Mail\OrderReceived;
use Illuminate\Support\Facades\Mail;
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
Route::post('/update_item', function(Request $request) {
    $cart_item_id = $request->cart_item_id;
    $quantity = $request->quantity;

    $cart_item = CartItem::where('id', '=', $cart_item_id)->update(['quantity' => $quantity]);
    return;
});

/**
 * 
 */
Route::post('/checkout_complete', function(Request $request) {
    $event = $request->type;
    switch ($event) {
        case "checkout.session.completed":
            $object = $request['data']['object'];
            $customer = $object['customer'];
            $user = User::where('customer_id', '=', $customer)->first();
            $cart_items = CartItem::where('user_id', '=', $user->id)->get();
            CartItem::destroy($cart_items); // Deletes items in the cart
            // Create order
            $order = Order::create(['user_id' => $user->id, 'total' => $object['amount_total']]);
            // Create order items with the cart items
            foreach($cart_items as $cart_item) {
                OrderItem::create(['order_id' => $order->id, 'product_id' => $cart_item->product_id, 'quantity' => $cart_item->quantity, 'price' => $cart_item->product->price]);
            }

            Mail::to($user->email)->send(new OrderReceived($order));
            break;
        default: break;
    }
    return;
});

Route::get('/email', function() {
    $order = Order::where('id', '=', 5)->first();
    return new OrderReceived($order);
});