@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit category</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="{{ url('admin/category/' . $category->slug) }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-4">
          <a href="/admin/category" class="btn"><i class=" bi bi-backspace"></i>
          Back</a>
        </div>
        <div class="mb-4">
          <label for="title" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
          required autofocus value="{{old('name', $category->name)}}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" 
          name="slug" required autofocus value="{{old('slug', $category->slug)}}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>  
        <button type="submit" class="btn">Submit</button>            
    </form>
</div>
@endsection