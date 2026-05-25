<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->role;

        if ($role === 'admin') {
            $products = Product::all(); // Replace this with the actual logic to fetch products
            return view('welcome', ['products' => $products]);
        } elseif ($role === 'user') {
            return view('user');
        } else {
            // Handle other roles or unexpected cases
            abort(403, 'Unauthorized');
        }
       // return view('home');
        
    }

    public function post(){
        return view('welcome');
    }
    
    
}
