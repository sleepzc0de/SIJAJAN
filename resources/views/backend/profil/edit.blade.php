@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Profil</h1>
</div>
<div class="col-lg-8">
  <form method="post" action="/profil/{profil}" class="mb-5" enctype="multipart/form-data">
  @method('put')
    @csrf
  <div class="mb-4">
    <a href="/profil" class="btn"><i class=" bi bi-backspace"></i>
    Back</a>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Upload Gambar</label>
    <input type="hidden" name="oldImage" value="{{ $user->image }}">
    @if($user->image)
    <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
      <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
        required autofocus value="{{old('name', auth()->user()->name)}}">
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" 
        name="username" required value="{{old('username', auth()->user()->username)}}">
      @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>            
      <button class="btn" type="submit">Submit</button>
  </form>
</div>

@endsection