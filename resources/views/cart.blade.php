@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container">
  <div class="row-fluid">
    @foreach ($cart as $temp)
    <h5 class="card-title">Cart ID : {{$temp->cart_id}}</h5>
    <div class="card" style="width: 18rem; display:inline-block;">
      @foreach ($temp->product as $product)
      <img class="card-img-top" src="{{ asset('Pictures/'.$product->image) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">IDR {{$product->price}}</p>        
      </div>
      @endforeach
      <p class="card-text">IDR {{$temp->quantity}}</p>

        <a href="" class="btn btn-primary">Delete</a>
        <a href="" class="btn btn-primary">Edit</a>
    </div>
    @endforeach    
  </div>
</div>
@endsection 