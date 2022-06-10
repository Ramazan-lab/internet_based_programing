@extends('layouts.adminlayout')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <div class="row">
                    <div class="col-md-6"><a href="{{ route('admin.treatment.destroy',['id'=>$data->id])}}">delete treatment</a></div>
                    <div class="col-md-6"><a href="{{ route('admin.treatment.edit',['id'=>$data->id])}}">edit treatment</a></div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                        <option>March 2021</option>
                        <option>April 2021</option>
                        <option>May 2021</option>
                        <option>June 2021</option>
                        <option>July 2021</option>
                    </select>
                </div>

            </div>
            <div class="row"> <h3 class="box-title mb-0">{{ $data->title }}</h3></div>

            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            
                            <th class="border-top-0">keywords</th>
                            <th class="border-top-0">description</th>
                            <th class="border-top-0">Image</th>
                            <th class="border-top-0">category</th>

                            <th class="border-top-0">detail</th>
                            <th class="border-top-0">price</th>
                            <th class="border-top-0">status</th>
                            <th style="width: 40px">create date</th>
                            <th style="width: 40px">update date</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                      
                        
                        <tr>
                            <td>{{ $data->id }}</td>
                            
                            <td>{{ $data->keywords }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                @if($data->image)
                                <img src="{{Storage::url($data->image)}}" alt="" style="width: 40px">
                                @endif
                            </td>
                            <td>{{ $data->categoryid }}</td>
                            <td>{{ $data->detail }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->updated_at }}</td>
                          
                        </tr>
                      
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection