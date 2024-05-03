@extends('layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
      <h5 class="card-title">{{ $drink->name }}</h5>
      <h5 class="card-title">Rp{{ $drink->price }}</h5>
      <p class="card-text">Category: {{ $drink->category->name }}</p>
      <p>{{ $drink->created_at->diffForHumans() }}</p>
  </div>
</div>
    
@endsection