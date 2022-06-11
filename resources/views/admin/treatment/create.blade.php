@extends('layouts.adminlayout')
@section('title',"add treatment")
@section('content')
<div class="row"></a>edit treatment</div>


<form role="form" action="{{route('admin.treatment.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control"  placeholder="title" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="text" class="form-control"  placeholder="keywords" name="keywords">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input type="text" class="form-control"  placeholder="description" name="description">
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label for="exampleInpuFile" class="custom-file-label"> choose image file</label>
            </div>
           
        </div>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">detail</label>
        <textarea class="form-control" name="detail" id="detail" cols="30" rows="10">

        </textarea>    

        <script>
          ClassicEditor
                  .create( document.querySelector( '#detail' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
  </script>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">price</label>
        <input type="number" class="form-control"  placeholder="0" name="price">
      
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