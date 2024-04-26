@extends('layouts.master')

@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <!-- home section starts -->
    @include('layouts.home_section')
    <!-- home section ends  -->

    <!-- speciality section starts -->
    @include('layouts.content_speciality_foods')
    <!-- speciality section ends -->

    <!-- popular selection starts -->
    @include('layouts.content_popular_foods')
    <!-- popular selection ends -->

    <!--  steps section starts  -->
    @include('layouts.steps')
    <!--  steps section ends   -->
@endsection
