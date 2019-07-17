@extends('layouts.app')
@section('content')
    <style>
        .ck-editor__editable {
            height: 200px;
        }
    </style>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Add Product
                    <a class="btn btn-info btn-sm float-right text-white" href="{{ route('product') }}">Back to Product List</a>
                </div>
                <div class="card-body">
                    <form action="{{ 'storeProduct' }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input name="productName" type="text" class="form-control" id="productName" placeholder="Product Name" required>
                        </div>

                        <div class="form-group">
                            <label for="productBrand">Product Brand</label>
                            <select name="productBrand" id="productBrand" class="form-control" required="required">
                                <option value="">Select Option</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->brand_id }}">{{ $brand->brandName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="productCategory">Product Category</label>
                            <select name="productCategory" id="productCategory" class="form-control" required="required">
                                <option value="">Select Option</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->category_id }}">{{ $category->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea class="form-control" name="productDescription" id="productDescription" placeholder="Product Description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" class="form-control" id="productImage" name="productImage">
                        </div>

                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input name="productPrice" type="number" class="form-control" id="productPrice" placeholder="Product Price" required>
                        </div>

                        <div class="form-group">
                            <label for="productDisplay">Product Display</label>
                            <select name="productDisplay" id="productDisplay" class="form-control">
                                <option value="1">Featured</option>
                                <option value="0">General</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success float-right">Submit Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#productDescription' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection