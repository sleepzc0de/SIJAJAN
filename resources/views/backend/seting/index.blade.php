@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Seting </h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <h4>keamanan & Akun</h4>
        <li class="nav-item ms-auto"> <!-- Menggunakan ms-auto di sini -->
          <a href="seting/{seting}" class="text-decoration-none text-dark" ><h4>></h4></a>
        </li>
      </ul>
  </div>
</div>



@endsection

  

            

