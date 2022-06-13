@extends('layouts.adminlayout')

@section('content')

<div class="container">
    <h1>All comments</h1>

    @foreach ($data as $rs)

      <div class="row" style="margin:20px; border-radius: 20px; background-color:rgb(238, 251, 255); text-align:center; font-weight:500; font-size:2rem;">user id {{ $rs->id }}-) {{ $rs->comment }}<td><a href="{{ route('comment.destroy',['id'=>$rs->id])}}" onclick="return confirm('It will be deleted, are you sure')"><i class="fas fa-trash" style="color: red"></i></a></td>
      </div>
    @endforeach
   </div>

@endsection