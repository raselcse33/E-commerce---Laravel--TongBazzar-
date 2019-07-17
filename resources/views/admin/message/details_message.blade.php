@extends('layouts.app')
@section('content')

<div class="container">
	<div class="card-body">
		<div class="row">
			<div class="col-md-4">
				<label>Name</label>
				<input class="form-control" type="text" name="name" value="{{$message->name}}" readonly>
			</div>
			<div class="col-md-4">
				<label>Email</label>
				<input class="form-control" type="text" name="name" value="{{$message->email}}" readonly>
			</div>
			<div class="col-md-4">
				<label>Subject</label>
				<input class="form-control" type="text" name="name" value="{{$message->subject}}" readonly>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<label>Message</label>
				<textarea class="form-control" readonly>{{$message->message}}</textarea>
			</div>
		</div>
	</div>
</div>


@endsection