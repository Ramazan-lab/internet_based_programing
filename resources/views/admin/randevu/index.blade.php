@extends('layouts.adminlayout')
@section('title',"ANASAYFA")
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <div class="row">
                    <div class="col-md-6"><a href="{{route('admin.randevu.create')}}">add randevu</a></div>
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

            <h3 class="box-title mb-0">randevu</h3>
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
                            
                            <th style="width: 40px">edit</th>
                            <th style="width: 40px">delete</th>
                            <th style="width: 40px">show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rs)
                            
                        
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->user_id }}</td>
                            <td>{{ $rs->treatmentid }}</td>
                            <td>{{ $rs->date }}</td>                            
                            <td>{{ $rs->time }}</td>
                            <td>{{ $rs->dentist_id }}</td>
                            <td>{{ $rs->ip }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>
                            <td><a href="{{ route('admin.randevu.edit',['id'=>$rs->id])}}"><i class="fas fa-pencil-alt" style="color: green"></i></a></td>
                            <td><a href="{{ route('admin.randevu.destroy',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted, are you sure')"><i class="fas fa-trash" style="color: red"></i></a></td>
                            <td><a href="{{ route('admin.randevu.show',['id'=>$rs->id])}}"><i class="fas fa-eye" ></i></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

                    <h1 style="text-align: center; padding:20px">Bekleyen randevular</h1>

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
                            
                            <th style="width: 40px">edit</th>
                            <th style="width: 40px">delete</th>
                            <th style="width: 40px">show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data1 as $rs)
                            
                        
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->user_id }}</td>
                            <td>{{ $rs->treatmentid }}</td>
                            <td>{{ $rs->date }}</td>                            
                            <td>{{ $rs->time }}</td>
                            <td>{{ $rs->dentist_id }}</td>
                            <td>{{ $rs->ip }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>
                            <td><a href="{{ route('admin.randevu.edit',['id'=>$rs->id])}}"><i class="fas fa-pencil-alt" style="color: green"></i></a></td>
                            <td><a href="{{ route('admin.randevu.destroy',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted, are you sure')"><i class="fas fa-trash" style="color: red"></i></a></td>
                            <td><a href="{{ route('admin.randevu.show',['id'=>$rs->id])}}"><i class="fas fa-eye" ></i></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>


            <h1 style="text-align: center; padding:20px">Onaylanan randevular</h1>
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
                            
                            <th style="width: 40px">edit</th>
                            <th style="width: 40px">delete</th>
                            <th style="width: 40px">show</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $rs)
                            
                        
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->user_id }}</td>
                            <td>{{ $rs->treatmentid }}</td>
                            <td>{{ $rs->date }}</td>                            
                            <td>{{ $rs->time }}</td>
                            <td>{{ $rs->dentist_id }}</td>
                            <td>{{ $rs->ip }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>
                            <td><a href="{{ route('admin.randevu.edit',['id'=>$rs->id])}}"><i class="fas fa-pencil-alt" style="color: green"></i></a></td>
                            <td><a href="{{ route('admin.randevu.destroy',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted, are you sure')"><i class="fas fa-trash" style="color: red"></i></a></td>
                            <td><a href="{{ route('admin.randevu.show',['id'=>$rs->id])}}"><i class="fas fa-eye" ></i></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
         

        </div>
    </div>
</div>
@endsection





