<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class WebController extends Controller
{
    //
    public function productItem() {
        
        $product = Product::all();

        return view('home', ['product' => $product]);
    }
}
