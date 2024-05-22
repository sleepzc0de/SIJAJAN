@extends('layouts.main')

@section('container')
<section class="home" id="home">
    <h2>Drink Shop</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore
        temporibus rem amet laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum
        ipsam itaque impedit incidunt rem quisquam eos!</p>
    <a href="/daftarmenu" class="btn">List Menu</a>
{{--     
    <h2>Location</h2>
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.43567270237!2d106.823858320713!3d-6.183064856061241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f529e6d018f1%3A0xaff453c7ca93130e!2sUniversitas%20BSI%20Kampus%20Kramat%2098!5e0!3m2!1sid!2sid!4v1715931163479!5m2!1sid!2sid"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> --}}
</section>

<x-maps>
</x-maps>

<x-footer>
</x-footer>
{{-- <footer>  

</footer>
--}}
@endsection
