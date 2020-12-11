@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container">  
    <h1>Add Product</h1> 
    <form method="POST" action="/admin/add_product/success">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
            @foreach ($category as $temp)
                <option value="{{$temp->category_id}}">{{$temp->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" placeholder="Product Description">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Product Price">
        </div>
        <div class="form-group">
            <label>Choose File</label>
            <input type="file" class="form-control-file" name="image">
        </div>        
        <input type="submit" class="btn btn-primary">
    </form> 
</div>
@endsection 