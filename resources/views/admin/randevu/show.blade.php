@extends('layouts.adminlayout')

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <div class="row">
                    <div class="col-md-6"><a href="{{ route('admin.randevu.destroy',['id'=>$data->id])}}">delete randevu</a></div>
                    <div class="col-md-6"><a href="{{ route('admin.randevu.edit',['id'=>$data->id])}}">edit randevu</a></div>
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
                            <th class="border-top-0">user id</th>
                            <th class="border-top-0">treatmentid</th>
                            <th class="border-top-0">date</th>
                            <th class="border-top-0">time</th>
                            <th class="border-top-0"> dentist_id</th>
                            
                            <th class="border-top-0">ip</th>
                            <th class="border-top-0">note</th>
                            <th class="border-top-0">status</th>
                            
                          

                        </tr>
                    </thead>
                    <tbody>
                      
                        
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->treatmentid }}</td>
                            <td>{{ $data->date }}</td>                            
                            <td>{{ $data->time }}</td>
                            <td>{{ $data->dentist_id }}</td>
                            <td>{{ $data->ip }}</td>
                            <td>{{ $data->note }}</td>
                            <td>{{ $data->status }}</td>
                          
                        </tr>
                      
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection