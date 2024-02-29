<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        $ddd = array_reverse($products);
        
        return array_reverse($products);      
    }
}
