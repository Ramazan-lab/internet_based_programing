@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')
<div class="container">
    <div class="row">

 
@include('home.treatmentList')
</div>
</div>
@include('home.about-area2')
<!-- About-2 Area End -->
@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
@endsection