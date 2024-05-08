@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Menu</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/admin/category" enctype="multipart/form-data">
        @csrf
            <div class="mb-4">
              <label for="title" class="form-label">name</label>
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
              <button type="submit" class="btn">Submit</button>            
        </form>        
      </div>
      
        <script>
          const title = document.querySelector('#name');
          const slug = document.querySelector('#slug');
            name.addEventListener('change', function(){
              fetch('/dashboard/post/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
            document.addEventListener("trix-file-accept", function(e){
            e.preventDefault();
            });           
        </script>
@endsection