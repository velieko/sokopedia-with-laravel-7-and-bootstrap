@extends('master')

@section('content')  
<div class="card">      
    <div class="card-body" style="background: WhiteSmoke;">
      <h4 class="card-title">Products</h4>
      <table class="table">
        <thread>
          <tr >
              <th>Product</th>
              <th>Price</th>
          </tr>
        </thread>            
          <tbody>
            @foreach($product as $temp)
            <tr> 
              <td>{{$temp->name}}</td>
              <td>{{$temp->price}}</td>
            </tr>                    
            @endforeach
          </tbody>
      </table>      
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  @endsection