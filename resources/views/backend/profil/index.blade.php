@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Information</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif
  
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Photo Profil</h5>
                        <img src="https://source.unsplash.com/1000x500?guest" alt="guest" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong></p>
                                <p><strong>Username:</strong></p>
                                <p><strong>Email:</strong></p>                               
                                <a href="profil/{profil}/edit" class="btn"> Edit Profil</a>                        
                            </div>
                            <div class="col-md-6">                                
                                <p>{{ auth()->user()->name }}</p>
                                <p>{{ auth()->user()->username }}</p>
                                <p>{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
