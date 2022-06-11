
@foreach($treatmentlist as $rs)
    

<td>
<div class="card col-md-3 p-1 m-5" style="width: 18rem; border-radius:20px; background-color:rgb(250, 255, 241)">
    <a href="{{ route('home.treatments.detail',['id'=>$rs->id])}}"><img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="Card image cap" style="border-radius:20px;"></a>
    <div class="card-body">
        <h3>{{ $rs->title }}</h3>
      <p class="card-text">{{ $rs->description }}</p>
      <h5>{{ $rs->price }} TL</h5>
    </div>
  </div>
</td>
  @endforeach