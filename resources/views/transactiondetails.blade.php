@extends('master')
@section('title','Transactions Detail')
@section('content')  
<div class="container">

        <div class="row">
            <div class="col-3">
            @foreach($history as $temp)
                @foreach($temp->product as $product)
                <img src="{{ asset('Pictures/'.$product->image) }}" style="width:18rem;">
                </div>
                <div class="col-3 mt-4">
                    <h5>
                    {{$product->name}}   
                    </h5>
                    <p>
                    IDR {{$product->price}}
                    </p>
                </div>
                @endforeach
                <p>
                {{$temp->quantity}}
                </p>
            @endforeach
        </div>
    </div>
@endsection 