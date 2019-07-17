@extends('layout.sv1')
@section('slider')
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>Tong</span>Bazzar</h1>
								<h2>Shop Any Time</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="{{asset('public/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
								<img src="{{asset('public/images/home/pricing.png')}}"  class="pricing" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>Tong</span>Bazzar</h1>
								<h2>24 Hours Open</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="{{asset('public/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
								<img src="{{asset('public/images/home/pricing.png')}}"  class="pricing" alt="" />
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-6">
								<h1><span>Tong</span>Bazzar</h1>
								<h2>Shop Now</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="{{asset('public/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
								<img src="{{asset('public/images/home/pricing.png')}}" class="pricing" alt="" />
							</div>
						</div>
						
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->
@endsection
@section('content')

	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
		@foreach($featureProducts as $featureProduct)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img class="img-fluid" style="width: 208px; height: 183px" src="{{asset($featureProduct->productImage)}}" alt="" />
						<h2>Tk. {{ $featureProduct->productPrice }}</h2>
						<p>{{ substr($featureProduct->productName, 0, 25) }}</p>
						<a href="{{route('add.cart',['id'=>$featureProduct->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Tk. {{ $featureProduct->productPrice }}</h2>
							<p>{{ $featureProduct->productName }}</p>
							<a href="{{route('add.cart',['id'=>$featureProduct->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="{{route('add.wish',['id'=>$featureProduct->id])}}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
						<li><a href="{{route('viewProduct',['id'=>$featureProduct->id])}}"><i class="fa fa-eye"></i>View Details</a></li>
					</ul>
				</div>
			</div>
		</div>
		@endforeach

	</div><!--features_items-->
	<div class="features_items"><!--general_items-->
		<h2 class="title text-center">General Items</h2>
		@foreach($generalProducts as $generalProduct)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img class="img-fluid" style="width: 208px; height: 183px" src="{{asset($generalProduct->productImage)}}" alt="" />
						<h2>Tk. {{ $generalProduct->productPrice }}</h2>
						<p>{{ substr($generalProduct->productName, 0, 25) }}</p>
						<a href="{{route('add.cart',['id'=>$generalProduct->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Tk. {{ $generalProduct->productPrice }}</h2>
							<p>{{ $generalProduct->productName }}</p>
							<a href="{{route('add.cart',['id'=>$generalProduct->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="{{route('add.wish',['id'=>$generalProduct->id])}}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
						<li><a href="{{route('viewProduct',['id'=>$generalProduct->id])}}"><i class="fa fa-eye"></i>View Details</a></li>
					</ul>
				</div>
			</div>
		</div>
		@endforeach

	</div><!--general_items-->


@endsection