@extends('backendtemplate')
@section('content')
        <div class="container-fluid">
        	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        		<div class="col">
        	<h2 class="h3 mb-0 text-gray-800">Order List</h2>
        		</div>
    		</div>
    	</div>

        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<table class="table table-bordered">
        					<thead  class="thead-dark">
        						<tr>
        							<th>No</th>
        							<th>VoucherNo</th>
        							<th>User_id</th>
        							<th>Total</th>
        							<th>Action</th>
        						</tr>
        					</thead>
        					<tbody>
        						@php $i=1; @endphp
        						@foreach($orders as $order)
        						<tr>
        							<td>{{$i++}}</td>
        							<td>{{$order->voucherno}}</td>
        							<td>{{$order->user_id}}</td>
        							<td>{{$order->total}}</td>
        							<td>
        								<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
        							</td>
        						</tr>
        						@endforeach
        					</tbody>
        				</table>
        			</div>
        		</div>
        	</div>
       

@endsection