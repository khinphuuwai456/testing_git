@extends('backendtemplate')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
           </div>
           </div>
        </div>
<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Category Name :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="" name="category">
        @error('category')
                <label class="text-danger">Please input category name</label>
                @enderror
      </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Category Photo :</label>
        <div class="col-sm-6">
          <input type="file" class="form-control-file" id="" name="photo">
          @error('photo')
                <label class="text-danger">Please choose photo</label>
                @enderror
        </div>
      </div>
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
</div>
@endsection