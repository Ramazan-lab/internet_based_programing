@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')

<div class="container">
    <div class="row">
    
@foreach($randevulist as $rs)

<div class="card col-md-3 p-1 m-5" style="width: 18rem; border-radius:20px; background-color:rgb(250, 255, 241)">
   
      @auth
      <h2> {{ Auth::user()->name }} beyin/hanımın randevuları</h2>
      <div class="card col-md-3 p-1 m-5" style="width: 18rem; border-radius:20px; background-color:rgb(250, 255, 241)">

      <div class="card-body">
        <h3>{{ $rs->date }}--{{ $rs->time }}</h3>
      <p class="card-text">{{ $rs->note }}</p>
    </div>
</div>
      @else
    <div class="container">
     <h1 style="text-align: center"> randevularınızı görmek için oturum açınız</h1>
    </div>

      @endauth


     
    
  

  @endforeach
</div>
</div>

@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
@endsection