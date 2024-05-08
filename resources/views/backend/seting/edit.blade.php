@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Email&Password</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/seting/{seting}" class="mb-5" enctype="multipart/form-data">
    @method('put')
      @csrf
    <div class="mb-4">
      <a href="/seting" class="btn"><i class=" bi bi-backspace"></i>
      Back</a>
    </div>
    <div class="mb-4">
          <label for="email" class="form-label">Name</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
          required autofocus value="{{old('email', auth()->user()->email)}}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
          <button class="btn" type="submit">Submit</button>
    </form>
@endsection