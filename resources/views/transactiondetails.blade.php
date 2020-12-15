@extends('master')
@section('title','Transactions Detail')
@section('content')  
<div class="container">

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('Pictures/'.$history->product->image) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$history->product->name}}</h5>
            <p class="card-text">Quantity : {{$history->quantity}}</p>
            <p class="card-text">Price : IDR. {{ $history->quantity * $history->product->price }}</p>
        </div>       
    </div>
</div>
@endsection 