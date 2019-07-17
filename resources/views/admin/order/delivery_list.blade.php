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
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($orders))
                                @foreach($orders as $order)
                                    <tr>
                                        <td class="align-middle">{{ $order->productId }}</td>
                                        <td class="align-middle"><img class="img-fluid" src="{{ asset($order->image) }}" alt="" style="max-width: 120px;"></td>
                                        <td class="align-middle">{{ $order->productName }}</td>
                                        <td class="align-middle">{{ $order->price }}</td>
                                        <td class="align-middle">
                                            <a class="btn btn-info btn-sm mx-1 text-white" href="{{route('delivery.details.order',['id'=>$order->id])}}">View</a>
                                            <a class="btn btn-primary btn-sm mx-1 text-white" href="{{route('delete',['id'=>$order->id])}}">Delete</a>
                                            
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
                    <span class="float-right">{{ $orders->links() }}</span>
                </div>
            </div>
        </div>
</div>
@endsection