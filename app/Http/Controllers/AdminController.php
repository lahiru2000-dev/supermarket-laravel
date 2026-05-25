<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function Index(){
        $products = Product::all();
        return view('welcome')->with('products', $products);
    }
}
