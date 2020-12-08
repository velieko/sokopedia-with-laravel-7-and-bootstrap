@extends('master')

@section('content')  
<div class="container">
  <div class="row-fluid">
    @foreach ($product as $temp)
    <div class="card" style="width: 18rem; display:inline-block;">
      <img class="card-img-top" src="{{ asset('Pictures/'.$temp->image) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$temp->name}}</h5>
        <p class="card-text">{{$temp->price}}</p>
        <a href="#" class="btn btn-primary">Product Detail</a>
      </div>
    </div>
    @endforeach    
  </div>  
  <div class="d-flex justify-content-center">{{$product->withQueryString()->links()}}</div> 
</div>
@endsection 