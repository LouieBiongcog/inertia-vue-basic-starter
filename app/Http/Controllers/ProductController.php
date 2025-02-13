<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(){
        return Inertia::render('Product/Index' , [
            'products' => Product::with('category') -> get(),
            'categories' => Category::all()
        ]);
    }
}
