@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">List {{ $title }}</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif
    <div class="table-responsive col-lg-9">
        <a href="/admin/drink/create" class="btn mb-3"> Create New post</a>
      <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Tombol</th>
        </tr>
      </thead>
      <tbody>
      @foreach($drink as $d)
      <tr>
        <td>{{ $loop->iteration }} </td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->category->name}}</td>
        <td>Rp{{ $d->price }}</td>
        <td>
          <a href="/admin/drink/{{ $d->slug }}/edit" class="badge bg-warning">
            <i class="bi bi-pencil-square"></i></a>
        <form action="/admin/drink/{{$d->slug}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure')">
            <i class="bi bi-x-circle"></i></button>
        </form>
        </td>  
                   
      </tr>           
      @endforeach
      </tbody>
      </table>
  </div>
@endsection