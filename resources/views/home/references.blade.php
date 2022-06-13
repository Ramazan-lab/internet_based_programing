@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')
        <!--? Slider Area Start-->
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">contact to us</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <div class="container" style="border-radius: 20px; background-color:rgb(241, 255, 238); text-align:center;">
   <h2>References</h2>

   <p>{{ $data }}</p>

    </div>




    @include('home.testimonial-area')
    @include('home.videoArea')
   @endsection