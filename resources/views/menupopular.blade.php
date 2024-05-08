@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu {{ $title }}</h1>
</div>
<div class="card">
    @if(isset($drink[2]->name))
    <div class="card-body">
        <div class="card bg-dark text-white">
            @if($drink[2]->image)       
                <img src="{{ asset('storage/' . $drink[2]->image) }}" alt="{{$drink[2]->category->name }}" class="img-fluid">        
            @else
                <img src="https://source.unsplash.com/1000x500?food" alt="Guest" class="card-img-top">            
            @endif
            <p class="card-text">Rp{{ $drink[2]->price }}</p>
        </div>
        <h5 class="card-title">{{ $drink[2]->name }}</h5>
        <p class="card-text">{{ $drink[2]->category->name }}</p>
        <p class="card-text">{{ $drink[2]->description }}</p>
        <p>{{ $drink[2]->created_at->diffForHumans() }}</p>
        <a id="orderNowBtn" class="btn" href="/login">Order Now</a>
    </div>
@endif

  </div>
  <script>
    document.getElementById('orderNowBtn').addEventListener('click', function(event) {
        if (!{{ auth()->check() ? 'true' : 'false' }}) {
            event.preventDefault(); 
            alert('Harap login terlebih dahulu');
            window.location.href = '/login';
        }
    });
    </script>   
@endsection
