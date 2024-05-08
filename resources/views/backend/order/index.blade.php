@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> {{ $title }}</h1>
    <a class="text-decoration-none btn" href="/menu/{{ $drink->id }}"><i class="bi bi-backspace-fill"> back</i></a>
  </div>
  <div class="card">
    <div class="card-body">                  
      <h5 class="card-title">{{ $drink->name }}</h5>
      <p class="card-text">{{ $drink->category->name }}</p>
      <p class="card-text">Rp{{ $drink->price }}</p>
    </div>
  </div>
@endsection