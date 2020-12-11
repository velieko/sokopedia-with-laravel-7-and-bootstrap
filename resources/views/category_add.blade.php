@extends('master')
@section('title','$okopedia')
@section('content')  
<div class="container">  
    <h1>Add Product</h1> 
    <form method="POST" action="/admin/add_category/success">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Category Name">
        </div>        
        <input type="submit" class="btn btn-primary">
    </form> 
</div>
@endsection 