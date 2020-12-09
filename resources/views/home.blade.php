<<<<<<< HEAD
@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container ">
  <div class="row-fluid">
    @foreach ($product as $temp)
    <div class="card shadow" style="width: 18rem; display:inline-block;">
      <img class="card-img-top" src="{{ asset('Pictures/'.$temp->image) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$temp->name}}</h5>
        <p class="card-text">Rp. {{$temp->price}}</p>
        <a href="{{ route('product', ['id' => $temp->product_id]) }}" class="btn btn-primary">Product Detail</a>
      </div>
    </div>
    @endforeach    
  </div>  
  <div class="d-flex justify-content-center mt-5">{{$product->withQueryString()->links()}}</div> 
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
>>>>>>> a31d39694bbd5e65eeaecf9f49cc747baf36423c
</div>
@endsection
