@extends('master')
@section('title','Products Detail')
@section('content')  
<div class="container">

        <div class="row">
            <div class="col-3">
            
            <img src="{{ asset('Pictures/'.$product->image) }}" style="width:18rem;;">
            </div>
            <div class="col-3 mt-5">
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
                <a href="#" class="btn" style="background: Green; color: white;">Add to cart</a>
                </div>
            </div>
           
        </div>
    </div>
@endsection 