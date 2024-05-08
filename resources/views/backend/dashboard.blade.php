@extends('backend.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
</div>
<div class="row justify-content-center align-items-center">
        <div class="container">
            <div class="col-lg-9 text-center">
                <img src="/img/logo2.jpg" alt="Logo" width="30%" height="30%" class="img-fluid">
                <h1>Selamat Datang di Dunia Rasa Minuman!</h1>
                <section>
                    <p>Temukan Ragam Minuman Pilihan Anda di Sini</p>
                    <p>Kami menyajikan informasi menarik seputar minuman favorit, mulai dari kopi, teh, jus, smoothie, hingga minuman segar lainnya. Jelajahi beragam resep, tips, dan ulasan minuman terbaik untuk memuaskan dahaga Anda.</p>
                    <p>Nikmati pengalaman berselancar yang menyegarkan di situs kami. Selamat menikmati!</p>
                </section>
            </div>
        </div>
    </div>
    
@endsection