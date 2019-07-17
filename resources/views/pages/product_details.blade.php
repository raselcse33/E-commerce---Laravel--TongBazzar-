@extends('layout.sv1')

@section('content')

<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{asset($getProduct->productImage)}}" alt="" />
		</div>
	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<h2>{{ $getProduct->productName }}</h2>
			<span>
				<span>Tk. {{ $getProduct->productPrice }}</span>
				<label>Quantity:</label>
				<input type="text" value="1" readonly />
				<a href="{{route('add.cart',['id'=>$getProduct->id])}}" class="btn btn-fefault cart">
					<i class="fa fa-shopping-cart"></i>
					Add to cart
				</a>
			</span>
			<p><b>Brand:</b> {{ $getProduct->brandName }}</p>
			<p><b>Category:</b> {{ $getProduct->categoryName }}</p>
			<p><b>Details:</b> {!! $getProduct->productDescription !!}</p>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Smiller items</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
			@foreach($getSimiller as $similler)
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img class="img-fluid" style="width: 208px; height: 183px" src="{{asset($similler->productImage)}}" alt="" />
								<h2>Tk. {{ $similler->productPrice }}</h2>
								<p>{{ substr($similler->productName, 0, 25) }}</p>
								<a href="{{route('add.cart',['id'=>$similler->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								<a href="{{ route('viewProduct', $similler->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>			
	</div>
</div>



@endsection