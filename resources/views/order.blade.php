@extends('layouts.master')

@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <div class="box-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach ($order as $item)
            <div class="box">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}">
                <div class="content">
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->makanan }}</p>
                    <p class="card-text"><strong>Harga: </strong> ${{ $item->harga }}</p>
                    <a href="{{ route('addfood.to.cart', $item->id) }}" class="btn">Order Now</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
