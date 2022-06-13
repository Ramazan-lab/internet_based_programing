<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        
        @foreach ($sliderdata as $rs)
               
      <div class="carousel-item @once active @endonce">
        <h1 style="text-align: center; font-weight:700;   position: absolute; top: 50%;    left: 50%;
        transform: translate(-50%, -50%); color:rgb(255, 255, 255); background-color:black; border-radius:20px; padding:10px">{{ $rs->title }}</h1>
        <img class="d-block w-100" src="{{Storage::url($rs->image)}}" alt="" style="width: 100%; height:600px">
        
      </div>
      
      @endforeach

    
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="color:blue">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>