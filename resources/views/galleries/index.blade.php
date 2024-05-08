@extends('layouts.master')

@section('css')
@endsection
@section('js')
@endsection

@section('content')

    <body>
        <h1>Gallery</h1>
        <div class="gallery-grid">
            @foreach ($galleries as $gallery)
                <div class="gallery-item">
                    <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">
                    <div class="overlay">
                        <a href="{{ route('galleries.show', $gallery->id) }}" class="btn-view">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
@endsection
