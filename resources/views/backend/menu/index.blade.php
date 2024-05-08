@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List {{ $title }}</h1>
</div>
    <div class="table-responsive col-lg-9">
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
          <a href="/menu/{{ $d->id }}" class="badge bg-info">
          <i class="bi bi-eye"></i></a>
        </td>             
      </tr>           
      @endforeach
      </tbody>
      </table>
  </div>
@endsection