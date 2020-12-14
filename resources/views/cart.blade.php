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
        <p class="card-text">Product Price : IDR {{$temp->product->price}}
        <br/>
        Quantity : {{$temp->quantity}}</p>     
        <a href="{{ url('cart/delete/'.$temp->cart_id) }}" class="btn btn-primary">Delete</a>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</a>
        <form method="POST" action="/checkoutproduct/{{$temp->product->product_id}}/checkoutcart/{{$temp->cart_id}}/success">
          <input type="submit" value="Checkout" class="btn mt-1" style="background:red ; color: white;">    
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/cart/edit/{{$temp->cart_id}}/success">
                  {{ csrf_field() }}    
                  {{ method_field('PUT') }}              
                  <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" class="form-control" name="quantity" placeholder="Input Quantity...">

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                      </div>
                  </div>
              </form> 
              </div>              
            </div>
          </div>
        </div>

      </div> 
        
    </div>
    @endforeach    
  </div>
</div>
@endsection 