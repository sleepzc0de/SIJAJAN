@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List {{ $title }}</h1>
</div>

<div class="row">
  <form action="/daftarmenu">
    @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ Request('search') }}">
        <button class="btn" type="submit">Submit</button>
    </div>
  </form>
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
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-text">{{ $item->category->name }}</p>
              <p class="card-text">{{ $item->created_at->diffForHumans() }}</p>
              <a href="{{ route('drink.show', $item->id) }}" class="btn">Details</a>
            </div>
        </div>
      </div>
      @endforeach
</div>

@endsection
