@extends('layout.sv2')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img style="height: 160px; width: auto;" src="{{asset('public/images/profile/avatar.png')}}" alt="..." class="img-thumbnail">
		</div>
		<form action="{{route('user_regiter.update',['id'=>$user->id])}}" method="post">
			{{csrf_field()}}
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<label>Full name</label>
						<input type="text" name="name" value="{{$user->name}}" class="form-control" required>
						<span class="text-danger">
							<strong>
								{{ $errors->first('name') }}
							</strong>
						</span>
					</div>
					<div class="col-md-6">
						<label>Email</label>
						<input type="email" name="email" value="{{$user->email}}"  class="form-control" required>
						<span class="text-danger">
							<strong>
								{{ $errors->first('email') }}
							</strong>
						</span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<label>BirthDay</label>
						<input type="date" name="date" value="{{$user->date}}" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Phone Number</label>
						<input type="text" name="phone" value="{{$user->phone}}" class="form-control">
						<span class="text-danger">
							<strong>
								{{ $errors->first('phone') }}
							</strong>
						</span>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<label>Address</label>
						<textarea name="address" class="form-control">{{$user->address}}</textarea>
					</div>
				</div>
				<div style="margin-top: 10px;margin-bottom: 50px;">
					<button class="btn-success" type="Submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>




@endsection