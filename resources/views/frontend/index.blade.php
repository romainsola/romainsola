@extends('layouts.frontend.app')

@section('content')

<!-- start page title -->
<section id="home" class="no-padding parallax wow fadeIn position-relative" data-stellar-background-ratio="0.5" style="background-image:url({{ asset('images/fond-3.jpg') }});">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container position-relative one-fourth-screen">
        <div class="slider-typography text-center">
            <div class="slider-text-middle-main">
                <div class="slider-text-middle">
<img src="{{ asset('images/logo-rs.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

@endsection