@extends('master')
@section('title','History')
@section('content')  

<div class="list-group">
@foreach($history as $temp)
  <a href="{{ route('transactiondetails', ['id' => $temp->history_id]) }}" class="list-group-item list-group-item-action">
  {{$temp->created_at}}
  </a>
@endforeach
</div>


@endsection 