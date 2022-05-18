@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')
        <!--? Slider Area Start-->
 @include('home.slider')
<!-- Slider Area End -->
<!--? About-2 Area Start -->
@include('home.about-area2')
<!-- About-2 Area End -->
@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
@endsection