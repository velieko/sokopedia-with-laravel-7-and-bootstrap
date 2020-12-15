<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    //
    public function productItem() {
        $auth = Auth::check();
        $product = Product::paginate(3);

        return view('homepage', ['product' => $product, 'auth'=>$auth]);
    }

    public function registerMenu() {
        return view('register');
    }

    public function loginMenu() { 
        return view('login');
    }

    public function searchItem(Request $request) { 

        $auth = Auth::check();
        $product = Product::where('name', 'like', "%".$request->search."%")->paginate(3);       

        return view('homepage', ['product' => $product, 'auth'=>$auth]);
    }
}
