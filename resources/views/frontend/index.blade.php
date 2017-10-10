@extends('layouts.frontend.app')

@section('content')
    <!-- start slider section -->
    <section class="no-padding full-screen">
        <div class="swiper-container swiper-vertical-pagination swiper-container-vertical">
            <div class="swiper-wrapper">
                <!-- start slide item -->
                <div class="swiper-slide cover-background" style="background-image: url('{{ asset('images/fond-2.jpg') }}')">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-bottom padding-100px-lr xs-padding-30px-lr">
                                    <div class="swiper-bottom-content bg-deep-pink width-500px padding-80px-all margin-50px-left sm-no-margin-left xs-width-90 xs-padding-20px-all">
                                        <h4 class="xs-margin-5px-bottom"><a href="single-project-page-01.html" class="font-weight-500 text-white alt-font text-white-hover">Lisa's Schweizer Branding</a></h4>
                                        <span class="alt-font text-uppercase text-small text-extra-dark-gray font-weight-500">Branding and Identity</span>
                                        <div class="box-arrow"><a href="single-project-page-01.html"><img src="images/homepage-option19-arrow-bg.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide item -->
                  <!-- start slide item -->
                <div class="swiper-slide cover-background" style="background-image: url('{{ asset('images/fond-1.jpg') }}')">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-bottom padding-100px-lr xs-padding-30px-lr">
                                    <div class="swiper-bottom-content bg-deep-pink width-500px padding-80px-all margin-50px-left sm-no-margin-left xs-width-90 xs-padding-20px-all">
                                        <h4 class="xs-margin-5px-bottom"><a href="single-project-page-01.html" class="font-weight-500 text-white alt-font text-white-hover">Lapin Blanc Absinthe</a></h4>
                                        <span class="alt-font text-uppercase text-small text-extra-dark-gray font-weight-500">Branding and Identity</span>
                                        <div class="box-arrow"><a href="single-project-page-01.html"><img src="images/homepage-option19-arrow-bg.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide item -->
                <!-- start slide item -->
                <div class="swiper-slide cover-background" style="background-image: url('http://placehold.it/1920x982')">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-bottom padding-100px-lr xs-padding-30px-lr">
                                    <div class="swiper-bottom-content bg-deep-pink width-500px padding-80px-all margin-50px-left sm-no-margin-left xs-width-90 xs-padding-20px-all">
                                        <h4 class="xs-margin-5px-bottom"><a href="single-project-page-02.html" class="font-weight-500 text-white alt-font text-white-hover">Urban Beehive Project</a></h4>
                                        <span class="alt-font text-uppercase text-small text-extra-dark-gray font-weight-500">Web and Photography</span>
                                        <div class="box-arrow"><a href="single-project-page-02.html"><img src="images/homepage-option19-arrow-bg.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slide item -->
                <!-- start slide item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end slider section -->

@endsection