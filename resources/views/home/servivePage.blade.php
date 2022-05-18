@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')

<div class="slider-area slider-area2">
    <div class="slider-active dot-style">
        <!-- Slider Single -->
        <div class="single-slider  d-flex align-items-center slider-height2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 ">
                     <div class="hero-wrapper">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".3s">Services</h1>
                            <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>

@include('home.services')

@include('home.testimonial-area')
@include('home.videoArea')
@endsection