@extends('layouts.master')

@section('css')
@endsection

@section('content')
    <section class="order" id="order">

        <h1 class="heading"> <span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="images/order-img.jpg" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="test" placeholder="food">
                </div>

                <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

                <input type="submit" href="/home" value="order now" class="btn">

            </form>
        </div>

    </section>
@endsection
