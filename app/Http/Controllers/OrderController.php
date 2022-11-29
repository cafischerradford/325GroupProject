<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

/**
 * 
 */
class OrderController extends Controller
{
    /**
     * 
     */
    public function index() {
        $user = Auth::user();
        $order = Order::where('user_id', '=', $user->id)->get();
        return view("order_history", ['orders' => $order]);
    }

    /**
     * 
     */
    public function order($id) {
        $order = Order::where('id', '=', $id)->first();
        //dd($order);
        return view('order', ['order' => $order]);
    }
}
