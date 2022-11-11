<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

/**
 * 
 */
class CartController extends Controller
{

    public function index() {
        $user = auth()->user();
        $cart_items = CartItem::where('user_id', '=', $user->id)->orderBy('product_id', 'asc')->get();
        $subtotal = 0;

        foreach($cart_items as $cart_item) {
            $subtotal += $cart_item->quantity * $cart_item->product->price;
        }

        return view('cart', ['cartitems' => $cart_items, 'subtotal' => $subtotal, 'total' => $subtotal + floor(($subtotal * 0.085))]);
    }

    /**
     * 
     */
    public function add(Request $request) {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric'
        ]);

        $user = auth()->user();
        $cart_item = CartItem::where('user_id', '=', $user->id)
        ->where('product_id', '=', $request->product_id)
        ->first();

        if ($cart_item) {
            $cart_item->quantity = $cart_item->quantity + $request->quantity;
            $cart_item->save();
        } else {
            CartItem::create(['product_id' => $request->product_id, 'user_id' => $user->id, 'quantity' => $request->quantity]);
        }

        return redirect()->back();
    }

    /**
     * 
     */
    public function delete(Request $request) {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id'
        ]);

        $user = auth()->user();
        CartItem::where('user_id', '=', $user->id)
        ->where('product_id', '=', $request->product_id)
        ->delete();
        
        return redirect('/cart');
    }
}
