<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category' => 'required|max:255'
        ]);

        

        $product=new product;
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->quantity=$request->input('quantity');
        $product->category=$request->input('category');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/', 'public');
           
            $product->image = $imagePath;
        }
        $product->save();
        return back()->with('success', 'Product added successfully');

        $data=product::all();
        //dd($data);
        return view('welcome')->with('products',$data);
    }

    public function deleteproduct($id){
        $product=Product::find($id);

        if ($product) {
            $product->delete(); // Delete the product if it exists
        } else {
            // Handle the case where the product doesn't exist
            return redirect()->back()->with('error', 'Product not found');
        }
    
        return redirect()->back()->with('success', 'Product deleted successfully');

        //$product->delete();
        //return redirect()->back();
    }

    public function updateproductview($id){
        $product=Product::find($id);

        return view('updateproduct')->with('productdata',$product);

    }

    public function updateproduct(Request $request){


        $id=$request->id;
        $name=$request->name;
        $price=$request->price;
        $quantity=$request->quantity;
        $category=$request->category;
        $data=Product::find($id);
        $data->name=$name;
        $data->category=$category;
        $data->price=$price;
        $data->quantity=$quantity;
        $data->save();
        $datas=Product::all();

        return redirect('/admin')->with('products', $datas)->with('success', 'Product updated successfully');

        //return view('welcome')->with('products',$datas);

        

    
    }
    
    

    public function searchProduct(Request $request){
        $searchTerm = $request->input('searchTerm');
    
        $products = Product::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('category', 'like', '%' . $searchTerm . '%')
            ->get();
    
        return view('user')->with('products', $products);
    }


    

    public function showProductsByCategory($category){

        
        $products= Product::where('category', $category)
                   ->orWhere('name', 'like',"%$category%")
                   ->get();

        return view('user',compact('products'));



    }

    public function showUserPage()
    {
        // Fetch special category products
        $specialProducts = Product::where('category', 'special')->get();

        // Other logic...

        return view('user', compact('specialProducts', /* other variables you need */));
    }


    




}