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
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Fruits & Vegetables')
        ->get();

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
