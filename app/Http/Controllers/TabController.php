<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TabController extends Controller
{
    public function index() {
        return redirect('/fruits_vegetables');
    }

    public function fruits_vegetables() {
        $products = Product::all();
        return view('fruits_vegs', ['products' => $products]);
    }

    public function meats() {

    }

    public function dairy() {

    }

    public function snacks() {

    }

    public function drinks() {
        
    }
}
