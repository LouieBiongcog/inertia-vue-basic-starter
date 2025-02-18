<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        $categories = Category::all();

        return inertia('Products/Index', compact('products', 'categories'));
    }
}
