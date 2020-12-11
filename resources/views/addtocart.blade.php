@extends('master')
@section('title','Products Detail')
@section('content')  
<div class="container">

        <div class="row">
            <div class="col-3">
            
            <img src="{{ asset('Pictures/'.$product->image) }}" style="width:18rem;;">
            </div>
            <div class="col-3 mt-4">
                <h5>
                {{$product->name}}   
                </h5>
                <p>
                IDR {{$product->price}}
                </p>
                <p>
                {{$product->description}}
                </p>
                <div class="col2">
                    <form method="POST" action="/addtocart/{{$product->product_id}}/success">
                        {{ csrf_field() }}
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity">
                        <input type="submit" value="Add to cart" class="btn" style="background: Green; color: white;">                        
                    </form>                
                </div>
            </div>
           
        </div>
    </div>
@endsection 