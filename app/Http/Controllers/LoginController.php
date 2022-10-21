<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect('/');
    }
}
