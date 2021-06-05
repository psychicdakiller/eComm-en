@extends('master')
@section("content")

	<div class="custom-product">
		<div class="col-sm-10">
			<div class="trending-wrapper">
			<h4>Result for Products</h4>
			<a href="/ordernow" title="" class="btn btn-success">Order Now</a><br>
			@foreach ($products as $item)
			    <div class="row searched-item cart-list-devider">
			    	<div class="col-sm-3">
			    		<a href="/detail/{{$item->id}}" title="">
						  <img src="{{$item->gallery}}" class="trending-image">
						  <div class="">
						    <h3>{{$item->name}}</h3>
						    <h5>{{$item->description}}</h5>
						  </div>
						</a>
			    	</div>
			    	<div class="col-sm-4">
						  <div class="">
						    <h3>{{$item->name}}</h3>
						    <h5>{{$item->description}}</h5>
						  </div>
			    	</div>
			    	<div class="col-sm-3">
			    		<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
			    	</div>
				</div>
		    @endforeach
		</div>
		</div>
	</div>
	<br>
@endsection