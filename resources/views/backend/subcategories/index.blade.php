@extends('backendtemplate')
@section('content')
<div class="container-fluid">

        <div class="row">
        <div class="col-6">
            <h2>Sub Categories</h2>
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>Category Name</th>
					<th>Subcategory Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->category->name}}</td>
					<td>{{$subcategory->name}}</td>

					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
@endsection