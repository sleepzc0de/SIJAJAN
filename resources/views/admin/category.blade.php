@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit {{ $title }}</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
{{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-9">
<a href="/admin/category/create" class="btn"> Create New category</a>
<table class="table table-striped table-sm">
<thead>
  <tr>
    <th scope="col">no</th>
    <th scope="col">name</th>
    <th scope="col">Tombol</th>
  </tr>
</thead>
<tbody>
@foreach($category as $c)
<tr>
  <td>{{ $loop->iteration }} </td>
  <td>{{ $c->name }}</td>
  <td>
    <a href="category/{{ $c->slug }}/edit" class="badge bg-warning">
    <i class="bi bi-pencil-square"></i></a>
    <form action="category/{{$c->slug}}" method="post" class="d-inline">
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