@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container">  
    <h1>Category</h1> 
    @foreach ($category as $temp)
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{$temp->name}}
                </button>
            </h5>
            </div>
          
            

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($temp->product as $product)
                        <tr>
                        <th scope="row">{{$product->product_id}}</th>
                        <td><img class="card-img-top" src="{{ asset('Pictures/'.$product->image) }}" alt="Card image cap"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        </tr>
                        @endforeach            
                    </tbody>
                </table>
            </div>
            </div>
        </div>        
    </div>
    @endforeach    
</div>
@endsection 