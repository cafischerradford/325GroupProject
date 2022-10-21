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

        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'email' => $request->email, 
            'password' => Hash::make($request->password)
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect('/');
    }
}
