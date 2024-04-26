<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responsive food website design tutorial</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    @yield('css')


</head>

<body>

    {{-- NAVBAR --}}
    <!--header section start-->
    @include('layouts.navbar')
    <!--header section end-->
    {{-- END NAVBAR --}}

    {{-- CONTENT --}}
    @yield('content')
    {{-- END CONTENT --}}

    <!--  footer section   -->

    @include('layouts.footer')

    <!-- scroll top button -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>

    <script src="script.js"></script>
    @yield('js')
</body>

</html>
