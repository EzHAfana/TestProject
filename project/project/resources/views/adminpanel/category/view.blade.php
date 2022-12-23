@extends('layouts.main')

@section('content_body')

<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">
        
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2">
                <h6 class="mb-4 bc-header">Order listing of category</h6>
            </div>
        </div>
        
        <div class="table-responsive product-list">
            
            <table class="table table-bordered table-striped mt-0" id="productList">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Action Update</th>
                        <th>Action Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $categories)
                    <tr>
                        <td>{{ $categories-> id }}</td>
                        <td>{{ $categories->name }}</td>
                        <td>{{ $categories->created_at }}</td>
                        <td>{{ $categories->updated_at }}</td>
                        <td>{{ $categories->deleted_at }}</td>
                        <td class="align-middle text-center"><a class="btn btn-success" href="{{ URL('category/' . $categories->id) }}"> <i class="fa fa-pencil"></i></a></td>
                        <td >
                            <form method="post" action="{{ URL('category/delete/' . $categories->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>
    @stop