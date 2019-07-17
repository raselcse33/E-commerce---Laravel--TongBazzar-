@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Category List
                    <button class="btn btn-info btn-sm float-right text-white" data-toggle="modal" data-target="#addCategory">Add Category</button>
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
                            @if($categories)
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->category_id }}</td>
                                <td>{{ $category->categoryName }}</td>
                                <td><a onclick="return confirm('Sure to Delete? This Categories product will also delete!')" class="btn btn-danger btn-sm" href="{{ route('categoryDelete', $category->category_id) }}">Delete</a></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2">No Category Available</td>
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
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addCategory') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input name="category" type="text" class="form-control" id="categoryName" placeholder="Type Category Name" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm float-right">Save Category</button>
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