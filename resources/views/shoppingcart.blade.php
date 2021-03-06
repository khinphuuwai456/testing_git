@extends('master')
@section('content')

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('index') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
						
					</tbody>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
             <textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
                
                <button class="btn btn-secondary  mainfullbtncolor buy_now"> 
                    Check Out 
                </button>
			<div class="col-12 mt-5 ">
				<a href="{{route('shoppingcart')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
	
                
                           
			</div>
			
		</div>
		

	</div>
	


	@endsection

	@section('totalqty')
		<i class="icofont-shopping-cart"></i> 
		<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti" id="totalqty">0 </span>
	@endsection

	@section('totalprice')
	<span class="totalprice"> 0 </span><span>ks</span>
	@endsection

	@section('script')
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	@endsection