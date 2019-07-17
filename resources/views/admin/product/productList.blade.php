@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Product List
                    <a class="btn btn-info btn-sm float-right text-white" href="{{ route('addProduct') }}">Add Product</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($products))
                                @foreach($products as $product)
                                    <tr>
                                        <td class="align-middle">{{ $product->id }}</td>
                                        <td class="align-middle"><img class="img-fluid" src="{{ asset($product->productImage) }}" alt="" style="max-width: 120px;"></td>
                                        <td class="align-middle">{{ $product->productName }}</td>
                                        <td class="align-middle">{!! substr($product->productDescription, 0, 30) !!} </td>
                                        <td class="align-middle">{{ $product->productPrice }}</td>
                                        <td class="align-middle">
                                            <a class="btn btn-info btn-sm mx-1 text-white" href="{{route('productView', [$product->id])}}">View</a>
                                            <a class="btn btn-primary btn-sm mx-1 text-white" href="{{route('productEdit', [$product->id])}}">Edit</a>
                                            <a onclick="return confirm('Sure to Delete?')" class="btn btn-danger btn-sm mx-1 text-white" href="{{route('productDelete', [$product->id])}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2">No Product Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <span class="float-right">{{ $products->links() }}</span>
                </div>
            </div>
        </div>
</div>
@endsection