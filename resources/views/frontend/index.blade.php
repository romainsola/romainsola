@extends('layouts.frontend.app')

@section('content')
    <!-- start slider section -->
    <section class="no-padding full-screen">
        <div class="swiper-container swiper-vertical-pagination swiper-container-vertical">
            <div class="swiper-wrapper">
                <!-- start slide item -->
                <div class="swiper-slide cover-background" style="background-image: url('{{ asset('images/fond-1.jpg') }}')">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-100px-lr xs-padding-30px-lr">
                                    <div class="swiper-bottom-content bg-black-opacity-light width-500px padding-80px-all sm-no-margin-left xs-width-90 xs-padding-20px-all ">
                                        <h4 class="xs-margin-5px-bottom"><a href="single-project-page-01.html" class="font-weight-500 text-white alt-font text-white-hover">Romain Sola Photographies</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide item -->
                <!-- start slide item -->
                <div class="swiper-slide cover-background" style="background-image: url('{{ asset('images/fond-2.jpg') }}')">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle padding-100px-lr xs-padding-30px-lr">
                                    <div class="swiper-bottom-content bg-black-opacity-light width-500px padding-80px-all sm-no-margin-left xs-width-90 xs-padding-20px-all ">
                                        <h4 class="xs-margin-5px-bottom"><a href="single-project-page-01.html" class="font-weight-500 text-white alt-font text-white-hover">Lisa's Schweizer Branding</a></h4>
                                        <div class="box-arrow"><a href="single-project-page-01.html"><img width="60" src="{{ asset('images/homepage-option19-arrow-bg.jpg') }}" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide item -->

            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end slider section -->


@endsection