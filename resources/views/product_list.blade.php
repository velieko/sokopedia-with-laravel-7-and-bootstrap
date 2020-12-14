@extends('admin')
@section('title','$okopedia')
@section('content')  
<div class="container">  
    <h1>Product</h1> 
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $temp)
            <tr>
            <th scope="row">{{$temp->product_id}}</th>
            <td><img class="card-img-top" src="{{ asset('Pictures/'.$temp->image) }}" alt="Card image cap"></td>
            <td>{{$temp->name}}</td>
            <td>{{$temp->category->name}}</td>
            <td>{{$temp->price}}</td>
            <td>{{$temp->description}}</td>
            <td><a href="{{ url('admin/product_list/delete/'.$temp->product_id) }}" class="btn btn-primary">Delete</a></td>
            </tr>
            @endforeach            
        </tbody>
    </table>
</div>
@endsection 