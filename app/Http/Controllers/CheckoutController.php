<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request) {
        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET", false));
        $items = json_decode($request->items[0]);
        $line_items = [];
        foreach($items as $item) {
            $line_item = 
            ['price_data' => [
                'currency' => 'usd', 'product_data' => [
                    'name' => $item->product->name,
                    'images' => [$item->product->image]
                    ],
                    'unit_amount_decimal' => $item->product->price
                ],
             'quantity' => $item->quantity,
             'tax_rates' => ['txr_1LAaOmGTHSHXoKWNOxo49uxd']
            ];
            array_push($line_items, $line_item);
        }

        $checkout_session = $stripe->checkout->sessions->create([
            'success_url' => 'http://localhost:8000/',
            'cancel_url' => 'http://localhost:8000/cart',
            'customer' => $request->customer_id,
            'line_items' => $line_items,
            'mode' => 'payment',
        ]);

        return redirect($checkout_session->url);
        dd($checkout_session);
    }
}
