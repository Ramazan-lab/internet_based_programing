@extends('layouts.frontbase')
@section('title','ANASAYFA')
@section('content')

<div class="container">
    <div class="row">
    
@foreach($randevulist as $rs)

<div class="card col-md-3 p-1 m-5" style="width: 18rem; border-radius:20px; background-color:rgb(250, 255, 241)">
    <div class="card-body">
        <h3>{{ $rs->date }}--{{ $rs->time }}</h3>
      <p class="card-text">{{ $rs->note }}</p>
      @auth
      <h2> <a href="{{ route('home.randevu.accept',['id'=>$rs->id])}}"><button onclick="return confirm('randevunuz alınmıştır')" style="background-color: black; ">take appointment  {{ Auth::user()->name }}</button></a></h2>

      @else

     <h2> <a href="/login"><button  style="background-color: black; ">take appointment</button></a></h2>

      @endauth


     
    </div>
  </div>

  @endforeach
</div>
</div>

@include('home.services')
@include('home.testimonial-area')
@include('home.videoArea')
@endsection