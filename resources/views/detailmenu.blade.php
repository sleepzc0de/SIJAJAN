@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"> {{ $title }}</h1>
    <a href="/daftarmenu" class="btn"><i class="bi bi-backspace-fill"> back</i></a>
</div>
<div class="card">
  <div class="card-body">
    <div class="card bg-dark text-white">
      @if($drink->image)       
      <img src="{{ asset('storage/' . $drink->image) }}" alt="{{ $drink->category->name }}" class="img-fluid">        
      @else
      <img src="https://source.unsplash.com/1000x500?food" alt="Guest" class="card-img-top">            
      @endif
      <p class="card-text">Rp{{ $drink->price }}</p>
    </div>
      <h3 class="card-title">{{ $drink->name }}</h3>
      <h4 class="card-text mb-3">{{ $drink->category->name }}</h4>
      <p class="card-text">{{ $drink->description }}</p>
      <p>{{ $drink->created_at->diffForHumans() }}</p>
      <a id="orderNow" class="btn" href="/login">Order Now</a>
  </div>
</div>
<script>
  document.getElementById('orderNow').addEventListener('click', function(event) {
      if (!@json(auth()->check())) {
          event.preventDefault(); 
          alert('Harap login terlebih dahulu');
          window.location.href = '/login';
      }
  });
</script>    
@endsection
