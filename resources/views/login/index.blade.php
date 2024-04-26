@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-md-4 mb-3">

    @if(session()->has('succes'))
    <div class="alert alert-succes alert-dismissible fade show" role="alert">
      {{ session('succes') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="alert alert-succes alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')
          is-invalid @enderror" id="email" placeholder="name@eample.com">
          <label for="email">Email address</label autofocus required value="{{old('email')}}">
          @error('email')
            <div class="invalid-feedback">
            {{ $message }}   
            </div> 
            @enderror  
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <label for="password">Password</label required>
        </div>
        <p>Belum punya Akun?<a href="/regis" class="text-decoration-none"> Registrasi</p></a>
        <button class="btn w-100 py-2" type="submit">Login</button>
      </form>
    </main>
  </div>
</div>

@endsection