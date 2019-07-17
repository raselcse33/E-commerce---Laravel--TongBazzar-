@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<label>Name</label>
			<input type="text" name="name" value="{{$user->name}}" class="form-control">
		</div>
		<div class="col-md-6">
			<label>Email</label>
			<input type="email" name="email" value="{{$user->email}}" class="form-control">
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<label>Phone</label>
			<input type="text" name="phone" value="{{$user->phone}}" class="form-control">
		</div>
		<div class="col-md-6">
			<label>date</label>
			<input type="date" name="date" value="{{$user->date}}" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label>Address</label>
			<textarea class="form-control">{{$user->address}}</textarea>
		</div>
	</div>
</div>



@endsection