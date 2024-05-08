@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Menu</h1>
  </div>
  <div class="col-lg-8">     
    <form method="post" action="/admin/drink" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <a href="{{ url('/admin/drink') }}" class="btn"><i class="bi bi-arrow-left-square"></i>
          Back</a>
        </div>
        <div class="mb-4">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
          required autofocus value="{{old('name')}}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{old('slug')}}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>              
        <div class="mb-4">
          <label for="slug" class="form-label">Price</label>
          <div class="input-group"> 
              <span class="input-group-text">Rp</span> 
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">
          </div>
          @error('price')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>             
        <div class="mb-4">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach($category as $d)
              @if(old('category_id') == $d->id)
                <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
              @else
                <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Upload Gambar</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
          <label for="description" class="form-label">descrioptin</label>
          @error('description')
          <p class="text-danger">{{$message}}</p>
          @enderror
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{old('description')}}">
          <trix-editor input="description"></trix-editor>
        </div>             
          <button type="submit" class="btn">Submit</button>            
    </form>        
  </div>
  
    <script>
      const name = document.querySelector('#name');
      const slug = document.querySelector('#slug');
        name.addEventListener('change', function(){
          fetch('/admin/drink/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        document.addEventListener("trix-file-accept", function(e){
        e.preventDefault();
        })
  
        function previewImage(){
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