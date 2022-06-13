@extends('layouts.adminlayout')
@section('title',"add treatment")
@section('content')
<div class="row"></a>add randevu</div>


<form role="form" action="{{route('admin.randevu.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">date</label>
      <input type="date" class="form-control"  placeholder="date" name="date">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">time</label>
      <input type="time" class="form-control"  placeholder="time" name="time">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ip</label>
        <input type="text" class="form-control"  placeholder="ip" name="ip">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">note</label>
        <input type="text" class="form-control"  placeholder="note" name="note">
      </div>
     
      </div>


      
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
          <option>1</option>
          <option>2</option>
          
        </select>
      </div>
    

    
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
@endsection

