<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | TongBazzer</title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/toastr.min.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 01762550200 , 01911-684827 , 01911-68482</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Info@tongbazzar.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{asset('public/images/home/logo.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
							    <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@if(Session::get('id'))
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="{{route('show.wishlist')}}"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="{{route('cheekout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                 <li><a href="{{route('logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                 <li><a href="{{route('user.profile')}}"><i class="fa fa-lock"></i> profile</a></li>
                                 @else
                                 <li><a href="{{route('user.login')}}"><i class="fa fa-lock"></i> Login</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{asset('/')}}" class="active">Home</a></li>
								<li><a href="{{asset('products')}}" class="">Products</a></li>
									<li><a href="{{route('cart')}}">Cart</a></li>
								@if(Session::get('id'))
								<li><a href="{{route('show.wishlist')}}"> Wishlist</a></li>
								<li><a href="{{route('cheekout')}}">Checkout</a></li> 
								@endif
								<li><a href="{{route('contact')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					<form action="{{route('search')}}" method="post">
						{{csrf_field()}}
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" name="search" placeholder="Search"/>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	@yield('slider')
	<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($categories as $category)
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title"><a href="{{ route('viewCategoryProduct', $category->category_id) }}">{{$category->categoryName}}</a></h4>
							</div>
						</div>
						@endforeach
					</div><!--/category-products-->
					
					<div class="brands_products"><!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								@foreach($brands as $brand)
								<li><a href="{{ route('viewBrandProduct', $brand->brand_id) }}"> {{ $brand->brandName}} </a></li>
								@endforeach
							</ul>
						</div>
					</div><!--/brands_products-->
				</div>
			</div>
			<div class="col-sm-9 padding-right">
				@yield('content')
			</div>
		</div>
	</div>
</section>
	
	<footer id="footer"><!--Footer-->		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Latest Products</h2>
							<ul class="nav nav-pills nav-stacked">
								@foreach($products as $product)
									<li><a href="{{ route ('viewProduct',$product->id) }}">{{ substr($product->productName, 0, 15) }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Latest Category</h2>
							<ul class="nav nav-pills nav-stacked">
								@foreach($categories as $category)
								<li><a href="{{ route('viewCategoryProduct', $category->category_id) }}">{{ $category->categoryName }}</a></li>
								@endforeach

							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Latest Brand</h2>
							<ul class="nav nav-pills nav-stacked">
								@foreach($brands as $brand)
									<li><a href="{{ route('viewBrandProduct', $brand->brand_id) }}">{{ $brand->brandName }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About TongBazzar</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 TongBazzar. All rights reserved.</p>
					<p class="pull-right">Developed by <span>
						<a target="_blank" 
						href="http://www.itspavel.com">Pavel Parvej</a>
						<span>&</span>
						<a target="_blank" 
						href="https://raselcse33.github.io/CV/index.html">Rasel</a>
					</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/js/jquery.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/js/price-range.js')}}"></script>
    <script src="{{asset('public/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/js/main.js')}}"></script>
    <script src="{{asset('public/js/toastr.min.js')}}"></script>
    <script type="text/javascript">
    	@if (Session::has('success')) 
           toastr.success("{{Session::get('success')}}")
    	@endif

    	 @if(Session::get('error'))
            toastr.error("{{ Session::get('error') }}");
		@endif
		
    	 @if(Session::get('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script>

</body>
</html>