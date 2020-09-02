@extends('backendtemplate')

@section('content')
   <div class="container-fluid">

          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        	<div class="row">
            <div class="col">
            <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1><br>
           </div>
           </div>
        </div>
        <form action="{{route('items.update',$item->id)}}"method="POST" enctype="multipart/form-data">
        	@csrf
        	@method('PUT')
            <div class="form-group row">
               <label for="name" class="col-sm-2 col-form-label">CodeNo</label>
              	<div class="col-sm-5">
            		<input type="text" class="form-control" name="codeno" value="{{$item->codeno}}" readonly="">
        		</div>
  			</div>
  			<div class="form-group row">
    			<label for="name" class="col-sm-2 col-form-label">Name</label>
    			<div class="col-sm-5">
      				<input type="text" name="name"class="form-control" id="" value="{{$item->name}}">
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Photo</label>
    			<div class="col-sm-5">
                    <input type="file" name="photo"class="form-upload-file" id="" value="{{$item->photo}}">

    				 <img src="{{asset($item->photo)}}" class="img-fluid w-25">
    				<input type="hidden" name="oldphoto" value="{{$item->photo}}"> 
                    

      				
    			</div>
  			</div>

  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Price</label>
    			<div class="col-sm-5">
      				<input type="number" name="price"class="form-control" id="" value="{{$item->price}}">
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Discount</label>
    			<div class="col-sm-5">
      				<input type="number" name="discount"class="form-control" id="" value="{{$item->discount}}">
    			</div>
  			</div>
  			<div class="form-group row">
    			<label class="col-sm-2 col-form-label">Description</label>
    			
  			    <div class="col-sm-5">
  				<textarea name="description"> 
  					{{$item->description}}       
  				</textarea>
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
      <input type="submit" name="btnsubmit" value="Update">
    </div>
  </div>
</form>
              	
             
        
    </div>
@endsection