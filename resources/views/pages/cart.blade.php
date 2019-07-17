@extends('layout.sv2')

@section('content')

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
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
								<a class="cart_quantity_down" href="{{route('cart.decrement',['id'=>$row->rowId, 'qty'=>$row->qty])}}"> - </a>
								
								<input class="cart_quantity_input" type="text" name="qty" value="{{$row->qty}}" autocomplete="off" size="2">
								<a class="cart_quantity_up" href="{{route('cart.increment',['id'=>$row->rowId, 'qty'=>$row->qty])}}"> + </a>
								
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
	</div>
</section> <!--/#cart_items-->


<section id="do_action">
		<div class="container">
			<div class="row">
				@if(cart::subtotal() == 0.00)
                  <p style="color: red; font-size: 30px; text-align: center;">Cart is Empty</p>
				@else
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>${{Cart::total()}}</span></li>
						</ul>
							{{-- <a class="btn btn-default update" href="">Update</a> --}}
							<a class="btn btn-default check_out btn-block" href="{{route('cheekout')}}">Check Out</a>
					</div>
				</div>
				@endif
			</div>
		</div>
	</section>

@endsection