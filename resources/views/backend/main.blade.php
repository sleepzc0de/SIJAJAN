<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>{{ $title }} | {{ auth()->user()->name }} </title>

   <!-- bootsrap core CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    
  </head>
  <body>
@include('backend.header')
<div class="container-fluid">
  <div class="row">
    @include('backend.sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('container')
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
crossorigin="anonymous"></script>

</body>
</html>
