@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Menu</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="{{ url('admin/drink/' . $drink->slug) }}" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <a href="{{ url('/admin/drink') }}" class="btn"><i class=" bi bi-backspace"></i> Back</a>
        </div>
        <div class="mb-4">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $drink->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="hidden" name="drink_id" value="{{ $drink->id }}">
        <div class="mb-4">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required autofocus value="{{ old('slug', $drink->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="form-label">Price</label>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{ old('price', $drink->price) }}">
            </div>
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach($category as $c)
                <option value="{{ $c->id }}" {{ old('category_id', $drink->category_id) == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $drink->image }}">
            @if($drink->image)
            <img src="{{ asset('storage/' . $drink->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required autofocus value="{{ old('description', $drink->description) }}">
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <trix-editor input="description"></trix-editor>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>

{{-- Script untuk tampilkan preview gambar --}}
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
