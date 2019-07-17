@extends('layouts.app')
@section('content')

<div class="container">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<label>Customer name</label>
				<input type="text" value="{{$order->name}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<label>Customer Email</label>
				<input type="text" value="{{$order->email}}" class="form-control" readonly>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Customer Address</label>
				<input type="text" value="{{$order->address}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<label>Customer Phone</label>
				<input type="text" value="{{$order->phone}}" class="form-control" readonly>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Product Id</label>
				<input type="text" value="{{$order->productId}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<label>Product Name</label>
				<input type="text" value="{{$order->productName}}" class="form-control" readonly>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Product Price</label>
				<input type="text" value="{{$order->price}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<label>Product Quantity</label>
				<input type="text" value="{{$order->qty}}" class="form-control" readonly>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Total Price</label>
				<input type="text" value="{{$order->price}}" class="form-control" readonly>
			</div>
			<div class="col-md-6">
				<label>Order Date</label>
				<input type="text" value="{{$order->orderDate}}" class="form-control" readonly>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Product Image</label>
				<img src="{{asset($order->image)}}" style="height: 90px;width: 90px" class="form-control">
			</div>
		</div>
	</div>
</div>



@endsection