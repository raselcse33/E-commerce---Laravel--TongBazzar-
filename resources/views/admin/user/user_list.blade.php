@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($users))
                                @foreach($users as $user)
                                    <tr>
                                        <td class="align-middle">{{ $user->name }}</td>
                                        
                                        <td class="align-middle">{{ $user->email }}</td>
                                        <td>
                                            <a href="{{route('user.details',['id'=>$user->id])}}" class="btn btn-warning">view</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2">No Order Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <span class="float-right">{{ $users->links() }}</span>
                </div>
            </div>
        </div>
</div>
@endsection