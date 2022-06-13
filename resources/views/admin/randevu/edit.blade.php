@extends('layouts.adminlayout')
@section('title',"edit randevu")
@section('content')
<div class="row"><a href="{{ route('admin.randevu.create') }}">add randevu</a><a href="{{ route('admin.randevu.edit',['id'=>$data->id])}}"></a>edit randevu</div>


<form role="form" action="{{ route('admin.randevu.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">date</label>
    <input type="date" class="form-control" value="{{ $data->date }}" placeholder="date" name="date">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">time</label>
    <input type="time" class="form-control"value="{{ $data->time }}"  placeholder="time" name="time">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">ip</label>
      <input type="text" class="form-control"value="{{ $data->ip }}"  placeholder="ip" name="ip">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">note</label>
      <input type="text" class="form-control"value="{{ $data->note }}"  placeholder="note" name="note">
    </div>
   
    </div>


    
    <div class="form-group">
      <label>Status</label>
      <select class="form-control" name="status">
        <option value="{{ $data->status }}"></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        
      </select>
    </div>
  

  
  <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection