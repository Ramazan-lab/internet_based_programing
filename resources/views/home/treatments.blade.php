@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')
@include('home.treatmentList')

@include('home.about-area2')
<!-- About-2 Area End -->
@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
@endsection