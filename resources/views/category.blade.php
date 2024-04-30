@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category</h1>
</div>
<div class="container">
    <div class="row">
        @foreach($category as $c)
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?" class="card-img" alt="">
                <h5 class="card-title ">{{ $c->name }}</h5>
                
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection