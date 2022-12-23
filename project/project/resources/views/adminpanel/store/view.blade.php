@extends('layouts.main')

@section('content_body')

<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">
        
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2">
                <h6 class="mb-4 bc-header">Order listing of store</h6>
            </div>
        </div>
        <div class="table-responsive product-list">
        <table class="table table-bordered table-striped mt-0" id="productList">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Create_At</th>
                        <th>Update_At</th>
                        <th>Delete_At</th>
                        <th>Action Update</th>
                        <th>Action Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store-> id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->phone }}</td>
                        <td>{{ $store->address }}</td>
                        <td><img src="{{ asset('/upload/product/'.$store->image) }}" width="100px"></td>
                        <td>{{ $store->created_at }}</td>
                        <td>{{ $store->updated_at }}</td>
                        <td>{{ $store->deleted_at }}</td>
                        <td ><a class="btn btn-success" href="{{ URL('stores/' . $store->id) }}"> <i class="fa fa-pencil"></i></a></td>
                        <td >
                            <form method="post" action="{{ URL('stores/delete/' . $store->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                 @endforeach
            </table>
            <div class="pagination-block">
				<?php //{{ $countries->links('layouts.paginationlinks') }} ?>
                   {{  $stores->appends(request()->input())->links('layouts.paginationlinks') }}
				</div>
        </div>
    </div>
</div>
@stop