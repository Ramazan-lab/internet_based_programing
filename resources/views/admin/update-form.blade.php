<div class="row"><a href="{{ route('admin.category.create') }}">add category</a><a href="{{ route('admin.category.edit',['id'=>$data->id])}}"></a>edit category</div>


<form role="form" action="{{ route('admin.category.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control"  value="{{ $data->title }}" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Keywords</label>
      <input type="text" class="form-control"  value="{{ $data->keywords }}" name="keywords">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input type="text" class="form-control"  value="{{ $data->description }}" name="description">
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
        <label>Status</label>
        <select class="form-control" name="status">
          <option>selected>{{ $data->status }}</option>
          <option>1</option>
          <option>2</option>
          
        </select>
      </div>

    
    <button type="submit" class="btn btn-primary">update</button>
  </form>