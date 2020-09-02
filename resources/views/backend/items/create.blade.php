@extends('backendtemplate')

@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        	<div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
           </div>
           </div>
        </div>
        <form action="{{route('items.store')}}"method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="form-group row">
               <label for="name" class="col-sm-2 col-form-label">CodeNo</label>
              	<div class="col-sm-5">
            		<input type="text" class="form-control" name="codeno">
                @error('codeno')
                <label class="text-danger">Please input Code Number must 4 number</label>
                @enderror
        		</div>
  			</div>
  			<div class="form-group row">
    			<label for="name" class="col-sm-2 col-form-label">Name</label>
    			<div class="col-sm-5">
      				<input type="text" name="name"class="form-control" id="">
              @error('name')
                <label class="text-danger">Please input name</label>
                @enderror
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Photo</label>
    			<div class="col-sm-5">
      				<input type="file" name="photo"class="form-upload-file" id="">
              @error('photo')
                <label class="text-danger">Please input Photo</label>
                @enderror
    			</div>
  			</div>

  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Price</label>
    			<div class="col-sm-5">
      				<input type="number" name="price"class="form-control" id="">
              @error('price')
                <label class="text-danger">Please input price</label>
                @enderror
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Discount</label>
    			<div class="col-sm-5">
      				<input type="number" name="discount"class="form-control" id="" value="0">
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Description</label>
    			
  			    <div class="col-sm-5">
  				<textarea name="description">         </textarea>
  				</div>
  			</div>

  			<div class="form-group row">
  				<div class="col-sm-5">
  					<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
  						<optgroup label="Choose Subcategory">
  							@foreach($subcategories as $subcategory)
  							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
  							@endforeach
  						</optgroup>
  					</select>
  				</div>
  			</div>

  			<div class="form-group row">
  				<div class="col-sm-5">
  					<select class="form-control form-control-md" id="inputBrand" name="brand">
  						<optgroup label="Choose Brand">
  							@foreach($brands as $brand)
  							<option value="{{$brand->id}}">{{$brand->name}}</option>
  							@endforeach
  						</optgroup>
  					</select>
  				</div>
  			</div>

  
          
  
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="btnsubmit" value="Create">
    </div>
  </div>
</form>
              	
             
        
    </div>
@endsection