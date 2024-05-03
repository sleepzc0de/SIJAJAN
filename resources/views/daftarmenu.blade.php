@extends('layouts.main')

@section('container')
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">list menu</h1>
</div>
<h1 class="mb-6 text-center"> {{$title}}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/post">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category')}}">
      @endif
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ Request('search') }}">
      <button class="btn btn-dark" type="submit">submit</button>
      </div>
    </form> 
    @foreach ($item as $local )
      <h2>{{ $item }}</h2>
    @endforeach
  </div>
</div>
{{-- <div class="row"> --}}
  @foreach ($drink as $item)
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">

        <img src="https://source.unsplash.com/1000x500?food" alt="guest" class="img-fluid">         
        <h5 class="card-title ">{{ $item->name }}</h5>
        <h5 class="card-title ">Rp{{ $item->price }}</h5>
        <p class="card-text">{{ $item->category->slug }}</p>
        <p>{{ $item->created_at->diffForHumans() }}</p>          
        <a href="{{ route('drink.show', $item->id) }}" class="btn">Details</a>
        
      </div>
    </div>
  </div>
  @endforeach

@endsection
