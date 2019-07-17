@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Brand List
                    <button class="btn btn-info btn-sm float-right text-white" data-toggle="modal" data-target="#addBrand">Add Brand</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($brands))
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->brand_id }}</td>
                                        <td>{{ $brand->brandName }}</td>
                                        <td><a onclick="return confirm('Sure to Delete? This Brands product will also delete!')" class="btn btn-danger btn-sm" href="{{ route('brandDelete', $brand->brand_id) }}">Delete</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2">No Brand Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addBrand') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="brandName">Brand Name</label>
                            <input name="brand" type="text" class="form-control" id="brandName" placeholder="Type Brand Name" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm float-right">Save Brand</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection