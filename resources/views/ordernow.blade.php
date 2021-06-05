@extends('master')
@section("content")

	<div class="custom-product">
		<div class="col-sm-10">
			<table class="table">
				<tbody>
					<tr>
						<td>Amount</td>
						<td>{{$total}}</td>
					</tr>
					<tr>
						<td>Tax</td>
						<td>$ 0</td>
					</tr>
					<tr>
						<td>Delivery</td>
						<td>$ 10</td>
					</tr>
					<tr>
						<td>Total Amount</td>
						<td>{{$total+10}}</td>
					</tr>
				</tbody>
			</table>
		</div>

		
		<div class="col-sm-10">
			<form action="/orderplace" method="POST">
				@csrf
				<div class="form-group">
					<label for="exampleInputName2">Email</label>
					<textarea class="form-control" name="address" id="exampleInputName2" placeholder="Your email address"></textarea>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="payment" id="exampleRadios1" value="cash">
						Online payment
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="payment" id="exampleRadios1" value="cash">
						Emi payment
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="payment" id="exampleRadios1" value="cash">
						Payment on delivery
					</label>
				</div>
				<button type="submit" class="btn btn-primary">Order Now</button>
			</form>
		</div>
	</div>

@endsection