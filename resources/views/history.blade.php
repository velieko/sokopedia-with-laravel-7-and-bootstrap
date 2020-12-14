@extends('master')
@section('title','History')
@section('content')  

<div class="list-group">
@foreach($trans as $temp)
  <a href="{{ route('transactiondetails', ['id' => $temp->transaction_id]) }}" class="list-group-item list-group-item-action">
  {{$temp->created_at}}
  </a>
@endforeach
</div>


@endsection 