<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        return view('about');
    }
}
