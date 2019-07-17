@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Product Details
                    <a class="btn btn-info btn-sm float-right text-white mx-1" href="{{ route('product') }}">Back to Product</a>
                    <a class="btn btn-primary btn-sm float-right text-white mx-1" href="{{route('productEdit', [$product->id])}}">Edit Product</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Name</p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $product->productName }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Brand</p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{  $product->brandName }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Category</p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $product->categoryName }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Description</p>
                        </div>
                        <div class="col-md-9">
                            {!! $product->productDescription !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Price</p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $product->productPrice }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Display</p>
                        </div>
                        <div class="col-md-9">
                            <p>: {{ $product->productDisplay == 0 ? 'General' : 'Featured' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Product Image</p>
                        </div>
                        <div class="col-md-9">
                            <img src="{{ asset($product->productImage) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection