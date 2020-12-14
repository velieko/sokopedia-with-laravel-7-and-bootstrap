<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = \App\Product::where('product_id','=',$id)->first();
        return view('product',['product'=>$product]);
    }

    public function indexCart($id)
    {
        $product = \App\Product::where('product_id','=',$id)->first();
        return view('addtocart',['product'=>$product]);
    }

    public function addProduct()
    {
        $category = Category::all();      
        return view('product_add',['category' => $category]);
    }

    public function addProductSuccess(Request $request)
    {
        $category = Category::all();

        $this->validate($request,[    		
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);

        Product::create([
            'name' => $request->name,            
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'category_id' => $request->category
        ]);
              
        return view('product_add',['category' => $category]);
        // return redirect('/');
    }

    public function addItem($id, Request $request)
    {

        $this->validate($request,[    		
    		'quantity' => 'required'
        ]);
        
        Cart::create([
            'product_id' => $id,
            'quantity' => $request->quantity
        ]);

        return redirect('/');
    }

    public function productList() {
        $product = Product::all();
        

        return view('product_list', ['product' => $product]);
    }

    public function productDelete($id) {

        $product = Product::find($id);
        $product->delete();        


        return redirect('admin/product_list');
    }

    public function cartList()
    {
        $cart = Cart::all(); 

        return view('cart', ['cart' => $cart]);
    }
    
    public function cartDelete($id)
    {
        $cart = Cart::find($id);
        $cart->delete();        


        return redirect('/cart');
    }

    public function editCart($id, Request $request)
    {
        $this->validate($request,[    		
    		'quantity' => 'required'
        ]);
        
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity; 
        $cart->save();

        return redirect('/cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
