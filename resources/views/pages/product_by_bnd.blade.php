@extends('layout.sv1')

@section('content')
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">All Items By Brands</h2>
	@foreach($allProduct as $product)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img class="img-fluid" style="width: 208px; height: 183px" src="{{asset($product->productImage)}}" alt="" />
					<h2>Tk. {{ $product->productPrice }}</h2>
					<p>{{ substr($product->productName, 0, 25) }}</p>
					<a href="{{route('add.cart',['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>Tk. {{ $product->productPrice }}</h2>
						<p>{{ $product->productName }}</p>
						<a href="{{route('add.cart',['id'=>$product->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="{{route('add.wish',['id'=>$product->id])}}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
					<li><a href="{{ route('viewProduct', $product->id) }}"><i class="fa fa-eye"></i>View Details</a></li>
				</ul>
			</div>
		</div>
	</div>
	@endforeach


	<span class="pull-right">{{ $allProduct->links() }}</span>
</div><!--features_items-->

@endsection


