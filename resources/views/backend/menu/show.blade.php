@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Show Menu {{ $drink->name }}</h1>
    <a class="text-decoration-none btn" href="/menu"><i class="bi bi-backspace-fill"> back</i></a>
  </div>
<div class="card mb-3 col-sm-10">
  @if($drink->image)       
    <img src="{{ asset('storage/' . $drink->image) }}" alt="{{$drink->category->name }}" class="img-fluid">        
  @else
    <img src="https://source.unsplash.com/1000x500?food" alt="Guest" class="card-img-top">            
  @endif
    <div class="card-body">
      <h5 class="card-title">{{ $drink->name }}</h5>
      <p class="card-text">Rp.{{ $drink->price }}</p>
      <p class="card-text">{{ $drink->description }}</p>
      <tr>
        <td>
          <a href="/order/{{ $drink->id }}" class="btn"><i class="bi bi-cart4"></i> Order Now</a>
        </td>
      </tr>
    </div>
</div>

@endsection