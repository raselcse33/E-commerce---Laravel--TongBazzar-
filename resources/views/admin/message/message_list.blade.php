@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Message List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($messages))
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->subject}}</td>
                                        <td>{!!  substr(strip_tags($message->message), 0, 20) !!}</td>
                                        <td>
                                            <a href="{{route('message.view',['id'=>$message->id])}}" class="btn btn-info btn-sm">View</a>
                                            <a onclick="return confirm('Sure to Delete? This Brands product will also delete!')" class="btn btn-danger btn-sm" href="{{route('delete.message',['id'=>$message->id])}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td style="text-align: center;" colspan="4">No Brand Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection