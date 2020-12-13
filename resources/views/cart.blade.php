@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container">
  <div class="row-fluid">
    @foreach ($cart as $temp)    
    <!-- {{$temp->product}} -->
    <div class="card" style="width: 18rem; display:inline-block;"> 
      <img class="card-img-top" src="{{ asset('Pictures/'.$temp->product->image) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$temp->product->name}}</h5>
        <p class="card-text">Product Price : IDR {{$temp->product->price}}</p>
        <p class="card-text">Quantity : {{$temp->quantity}}</p>     
        <a href="" class="btn btn-primary">Delete</a>
        <a href="" class="btn btn-primary">Edit</a>
      </div> 
        
    </div>
    @endforeach    
  </div>
</div>
@endsection 