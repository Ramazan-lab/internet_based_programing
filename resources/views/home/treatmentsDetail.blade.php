
  @extends('layouts.frontbase')
  @section('content')

<div class="col-md-12 m-5 p-3 text-center"  style="border-width: 2px; border-color:black; align:center">


  


                <div class="row" style="">
                    <h2 style="text-alingn:center;">{{$treatmentsdetail->title}}</h2>
                </div>
               <div class="row">
                <div class="col-md-8">
                @if($treatmentsdetail->image)
                                <img src="{{Storage::url($treatmentsdetail->image)}}" alt="" style="width: 100%">
                                @endif
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h1 style="color: green">{{ $treatmentsdetail->price }} TL</h1>
                  </div>
                  
                  @auth
                    <form role="form" action="{{route('comment.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <div class="row">
                         <label for=""> <h3>Add Comment</h3></label>
                        <input type="text" class="form-control"  placeholder="comment" name="comment" style="height: 350px; width:350px; margin-top:30px;">
                      </div>
                     
                  
                     
                      <button type="submit" class="btn btn-primary">submit</button>

                   
                      
                    </form>

                    @else
                    <h2> <a href="/login"><button style="background-color: black">Yorum yapmak için oturum açın.</button></a></h2>
                     @endauth


                  
                  </div>
                </div>
                   
               </div>

               <div class="row">
                <h3 style="padding: 15px">->Some Details</h3><br><br>

                <h5 style="padding-top: 30px">{!! $treatmentsdetail->detail !!}</h5>

                <td>{{ $treatmentsdetail->created_at }}</td>
                <td>{{ $treatmentsdetail->updated_at }}</td>

               </div>

               <div class="container">
                <h1>All comments</h1>

                @foreach ($commentdata as $rs)

                  <div class="row" style="margin:20px; border-radius: 20px; background-color:rgb(241, 255, 238); text-align:center; font-weight:500; font-size:2rem;">user id {{ $rs->id }}-) {{ $rs->comment }}</div>
                @endforeach
               </div>
                      
                        
                    
                           
                          
                       
                      
                        
                   
               
       



@endsection