<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\CartItem;

/**
 * 
 */
class TabController extends Controller
{
    public function index() {
        return redirect('/fruits_vegetables');
    }

    /**
     * 
     */
    public function fruits_vegetables() {
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Fruits & Vegetables')
        ->get(['products.id', 'products.name', 'products.price', 'products.unit_label', 'products.image']);

        $count = 0;

        if (auth()->user()) {
            $user = auth()->user();
            $count = CartItem::where('user_id', '=', $user->id)->sum('quantity');
        }

        return view('fruits_vegs', ['products' => $products, 'count' => $count]);
    }

    /**
     * 
     */
    public function meats() {
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Meats')
        ->get(['products.id', 'products.name', 'products.price', 'products.unit_label', 'products.image']);

        $count = 0;

        if (auth()->user()) {
            $user = auth()->user();
            $count = CartItem::where('user_id', '=', $user->id)->sum('quantity');
        }

        return view('meats', ['products' => $products, 'count' => $count]);

    }

    /**
     * 
     */
    public function dairy() {
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Dairy')
        ->get(['products.id', 'products.name', 'products.price', 'products.unit_label', 'products.image']);

        $count = 0;

        if (auth()->user()) {
            $user = auth()->user();
            $count = CartItem::where('user_id', '=', $user->id)->sum('quantity');
        }

        return view('dairy', ['products' => $products, 'count' => $count]);

    }

    /**
     * 
     */
    public function snacks() {
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Snacks')
        ->get(['products.id', 'products.name', 'products.price', 'products.unit_label', 'products.image']);

        $count = 0;

        if (auth()->user()) {
            $user = auth()->user();
            $count = CartItem::where('user_id', '=', $user->id)->sum('quantity');
        }

        return view('snacks', ['products' => $products, 'count' => $count]);

    }

    /**
     * 
     */
    public function drinks() {
        $products = Product::join('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->join('categories', 'product_categories.category_id', '=', 'categories.id')
        ->where('categories.name', '=', 'Drinks')
        ->get(['products.id', 'products.name', 'products.price', 'products.unit_label', 'products.image']);

        $count = 0;

        if (auth()->user()) {
            $user = auth()->user();
            $count = CartItem::where('user_id', '=', $user->id)->sum('quantity');
        }

        return view('drinks', ['products' => $products, 'count' => $count]);

    }
}
