<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Welcome');
});

Route::get('/products' , function(){
    return inertia('Products/Index');
});

Route::get('/categories' , function(){
    return inertia('Categories/Index');
});

Route::get('/contact' , function(){
    return inertia('Contact/Index');
});

