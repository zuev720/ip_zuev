<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(3);
        return view('index', compact('products'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function products()
    {
        $products = Product::get();
        return view('products', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function getProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product', compact('product'));
    }
}
