<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    //
    public function addCategory(Request $request)
    {        
        return view('category_add');
    }

    public function addCategorySuccess(Request $request)
    {
        $category = Category::all();

        $this->validate($request,[    		
            'name' => 'required',            
        ]);

        Category::create([
            'name' => $request->name,
        ]);
        return view('category_add');
    }

    public function categoryList() {
        $category = Category::all();    
        $product = Product::all();
       
        return view('category_list', ['category' => $category,'product'=>$product]);
    }
}
