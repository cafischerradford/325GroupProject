<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function index() {
        return view('signup');
    }

    public function create(Request $request) {

        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET", false));

        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);

        $customer = $stripe->customers->create([
            'email' => $request->email,
        ]);

        User::create([
            'email' => $request->email,
            'customer_id' => $customer->id,
            'password' => Hash::make($request->password)
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect('/');
    }
}
