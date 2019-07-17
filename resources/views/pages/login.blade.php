@extends('layout.sv2')
@section('content')

<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="{{route('user.post')}}" method="post">
						{{csrf_field()}}
						<input type="email" name="email" placeholder="Email Address" />
						<input type="password" name="password" placeholder="password" />
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form action="{{route('user.register')}}" method="post">
						{{csrf_field()}}
						<input type="text" name="name" placeholder="Name" required />
						<span class="text-danger"><strong> {{ $errors->first('name') }}</strong></span>
						<input type="email" name="email" placeholder="Email Address" required />
						<span class="text-danger"><strong> {{ $errors->first('email') }}</strong></span>
						<input type="password" name="password" placeholder="Password" required />
						<span class="text-danger"><strong> {{ $errors->first('password') }}</strong></span>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section>


@endsection