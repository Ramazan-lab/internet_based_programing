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
                                    <h1 data-animation="fadeInUp" data-delay=".3s">About</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- Slider Area End -->
    <!--? Team Area Start-->
    <section class="team-area pb-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="{{asset('asset/home')}}/assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Your daily meal plan</a></h5>
                            <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
                            sem ut ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="{{asset('asset/home')}}/assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">çürük temizliği</a></h5>
                            <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
                            sem ut ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="{{asset('asset/home')}}/assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">diş eti aşınması </a></h5>
                            <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi 
                            sem ut ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Team End-->
    <!-- Services End-->
    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{asset('asset/home')}}/assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Create a healthy 
                            life you love!</h2>
                        </div>
                        <p class="pera-top mb-40">Almost before we knew it, we had left the ground</p>
                        <p class="pera-bottom mb-30">Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                            dignissim dolor, a pretium mi sem ut ipsum. Fusce
                        fermentum. Pellentesque libero tortor, tincidunt et.</p>
                        <div class="icon-about">
                         <img src="{{asset('asset/home')}}/assets/img/icon/about1.svg" alt="" class=" mr-20">
                         <img src="{{asset('asset/home')}}/assets/img/icon/about2.svg" alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--? Testimonial Area Start -->
 @include('home.testimonial-area')
 @include('home.videoArea')
@endsection