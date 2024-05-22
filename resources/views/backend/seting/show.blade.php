@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">keamanan & Akun</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="mb-4">
    <a href="/seting" class="btn">
        <i class="bi bi-backspace"></i> Back
    </a>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h5> Your Email</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">                               
                                <p><strong>Email:</strong></p>
                                <a href="{seting}/edit" class="btn">Ganti Email</a>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
