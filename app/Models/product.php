<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category(){
        
        //return $this->belongsTo(Category::class);
    }

    public function addToCart($quantity = 1)
    {
        // Adjust the product quantity
        $this->update(['quantity' => max(0, $this->quantity - $quantity)]);
    }

    protected $fillable = [
        'name',
        'price',
        'quantity',  // Add this line to include the 'quantity' attribute
        'category',
        'image',
    ];
}
