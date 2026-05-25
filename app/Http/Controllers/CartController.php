<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    

    

    public function addToCart($productId)
{
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Please log in to make a purchase.');
    }

    // Find the product by ID
    $product = Product::findOrFail($productId);

    // Check if the product is in stock
    if ($product->quantity <= 0) {
        return redirect()->route('user')->with('error', 'Product is out of stock.');
    }

    // Get the selected quantity from the form
    $selectedQuantity = request('quantity');

    // Validate the selected quantity if needed
    $validatedData = request()->validate([
        'quantity' => ['required', 'integer', 'min:1', 'max:' . $product->quantity],
    ]);
    // Get the current cart from the session or create an empty one
    $cart = session()->get('cart', []);

    // Add the product to the cart
    if (isset($cart[$productId])) {
        // Check if adding more exceeds the available quantity
        if ($selectedQuantity > $product->quantity) {
            return redirect()->route('user')->with('error', 'Selected quantity exceeds available stock.');
        }

        $cart[$productId]['quantity'] += $selectedQuantity;

        // Update the product quantity in the database
        $product->decrement('quantity', $selectedQuantity);
    } else {
        // Save the original quantity in the cart for reference
        $cart[$productId] = [
            'product' => $product,
            'original_quantity' => $product->quantity,
            'quantity' => $selectedQuantity,
        ];

        // Decrement the product quantity in the database
        $product->decrement('quantity', $selectedQuantity);
    }

    // Store the updated cart in the session
    session()->put('cart', $cart);

    //return redirect()->route('cart')->with('success', 'Product added to cart.');

    return redirect()->back()->with('success', 'Product added to cart.');
}




    public function showCart()
{
        // Retrieve the cart data from the session
        $cart = session()->get('cart', []);

        // Calculate the total price of items in the cart (you can modify this logic as needed)
        $totalCartPrice = 0;

        $totalQuantity = 0;

       

        foreach ($cart as $item) {
            $totalCartPrice += $item['product']->price * $item['quantity'];
            $totalQuantity += $item['quantity'];
        }

        return view('cart', compact('cart', 'totalCartPrice', 'totalQuantity'));

        

    
        

        
       
}

    

    public function removeFromCart($productId)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
        // Get the product and its quantity from the cart
        $product = $cart[$productId]['product'];
        $removedQuantity = $cart[$productId]['quantity'];

        // Increment the product quantity in the database by the removed quantity
        $product->increment('quantity', $removedQuantity);

        // Remove the product from the cart
        unset($cart[$productId]);

        // Update the cart data in the session
        session()->put('cart', $cart);

        // Pass the removed quantity to the cart view
        return $this->showCart()->with('removedQuantity', $removedQuantity);
    }

    // If the product is not found in the cart, redirect back to the cart page with an error message
    return redirect()->route('cart')->with('error', 'Product not found in cart.');
}

    public function checkout(){
        $cart = session()->get('cart', []);

    // Calculate the total price of items in the cart (you can modify this logic as needed)
        $totalCartPrice = 0;
        foreach ($cart as $item) {
            $totalCartPrice += $item['product']->price * $item['quantity'];
        }

        // Pass the cart and totalCartPrice variables to the checkout view
        return view('checkout', compact('cart', 'totalCartPrice'));
        }



        public function showUserPage()
        {
            // Fetch special category products
            $specialProducts = Product::where('category', 'special')->get();

            // Calculate total cart quantity using the showCart method
            $cartController = new CartController();
            $totalQuantity = $cartController->showCart()['totalQuantity'];

            // Other logic...

            return view('user', compact('specialProducts', 'totalQuantity', /* other variables you need */));
        }

        
        


        

       

        

        
}