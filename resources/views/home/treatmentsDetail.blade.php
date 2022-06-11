
  @extends('layouts.frontbase')
  @section('content')

<div class="col-md-12 m-5 p-3 text-center"  style="border-width: 2px; border-color:black; align:center">


  


                <div class="row" style="text-align: center;">
                    <h2 style="align-content: center; text-alingn:center;">{{$treatmentsdetail->title}}</h2>
                </div>
               <div class="row">
                <div class="col-md-8">
                @if($treatmentsdetail->image)
                                <img src="{{Storage::url($treatmentsdetail->image)}}" alt="" style="width: 100%">
                                @endif
                </div>
                <div class="col-md-4">
                    <h1 style="color: green">{{ $treatmentsdetail->price }} TL</h1>
                </div>
                   
               </div>

               <div class="row">
                <h3 style="padding: 15px">->Some Details</h3><br><br>

                <h5 style="padding-top: 30px">{!! $treatmentsdetail->detail !!}</h5>

               </div>
                      
                        
                    
                            <td>{{ $treatmentsdetail->created_at }}</td>
                            <td>{{ $treatmentsdetail->updated_at }}</td>
                          
                       
                      
                        
                   
               
       


</div>
@endsection