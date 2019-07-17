@extends('layout.sv2')

@section('content')

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div><!--/breadcrums-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-3">
					<div class="shopper-info">
						<p>Shopper Information</p>

						<p> {{$user['name']}} </p>
						<p> {{$user['email']}} </p>

					</div>
				</div>
				<div class="col-sm-9 clearfix">
					<div class="bill-to">
						<p>Bill To</p>
						<div class="form-one">
							<form action="{{route('order.store')}}" method="post">
								{{csrf_field()}}
								<input type="text" name="name" placeholder="Name*" required>
								<span class="text-danger">
									<strong>
										{{ $errors->first('name') }}
									</strong>
								</span>
								<input type="text" name="email" placeholder="Email*" required>
								<span class="text-danger">
									<strong>
										{{ $errors->first('email') }}
									</strong>
								</span>
								<input type="text" name="phone" placeholder="Phone*" required>
								<span class="text-danger">
									<strong>
										{{ $errors->first('phone') }}
									</strong>
								</span>
								<textarea type="text" name="address" placeholder="Full-Address*" rows="5" required></textarea>
								<span class="text-danger">
									<strong>
										{{ $errors->first('address') }}
									</strong>
								</span>

							</div>
						{{-- <div class="form-two">
							<form>
								<input type="text" placeholder="Zip / Postal Code *">
								<input type="text" placeholder="City">
								<input type="text" placeholder="Country *">
							</form>
						</div> --}}
					</div>
				</div>
				{{-- <div class="col-sm-4">
					<div class="order-message">
						<p>Message</p>
						<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="5"></textarea>
					</div>	
				</div>	 --}}				
			</div>
		</div>
		<div class="review-payment">
			<h2>Review & Payment</h2>
		</div>

		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					@foreach(Cart::content() as $row)
					<tr>
						<td class="cart_product">
							<a href=""><img style="height: 90px; width: 90px" src="{{asset($row->options->image)}}" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">{{$row->name}}</a></h4>
							<p>Web ID: {{$row->id}}</p>
						</td>
						<td class="cart_price">
							<p>${{$row->price}}</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href="{{route('cart.increment',['id'=>$row->rowId, 'qty'=>$row->qty])}}"> + </a>
								<input class="cart_quantity_input" type="text" name="qty" value="{{$row->qty}}" autocomplete="off" size="2">
								<a class="cart_quantity_down" href="{{route('cart.decrement',['id'=>$row->rowId, 'qty'=>$row->qty])}}"> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">${{$row->total}}</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="{{route('delete.cart',$row->rowId)}}"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
        @if(Cart::subtotal() == 0.00)
        <p style="font-size: 30px; color: red; text-align: center;">Cart Empty</p>
        @else
		<div class="cart_">
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>${{Cart::total()}}</span></li>
						</ul>
					</div>
				</div>
			</div>


			<div class="payment-options">
				<span>
					<label><input  type="checkbox" required> Cash On Delivery</label>
				</span>
				<br>
				{{-- <a class="btn btn-default check_out btn-block" href="{{route('complete')}}">Confirm Your Order</a> --}}
				<input class="btn btn-default check_out btn-block" type="submit" name="submit" value="submit">
			</div>
		</div>
		@endif
	</form>

</div>
</section> <!--/#cart_items-->

@endsection