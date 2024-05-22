@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List {{ $title }}</h1>
</div>
<x-search></x-search>
<div class="row">
  @foreach ($drink as $item)
    <div class="col-sm-6 mb-3">
      <div class="card">
        <div class="card bg-dark text-white">
          @if($item->image)       
          <img src="{{ asset('storage/' . $item->image) }}" alt="{{$item->category->name }}" class="img-fluid">        
          @else
          <img src="https://source.unsplash.com/1000x500?food" alt="Guest" class="card-img-top">            
          @endif
            <p class="card-text">Rp{{ $item->price }}</p>
        </div>
        <div class="card-body">
          <h3 class="card-title">{{ $item->name }}</h3>
            <h4 class="card-text">{{ $item->category->name }}</p>
            <p class="card-text">{{ $item->created_at->diffForHumans() }}</p>
              <a href="{{ route('drink.show', $item->id) }}" class="btn">Details</a>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
