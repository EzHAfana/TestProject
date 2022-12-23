@extends('layouts.main')

@section('content_body')


<div>
    <h5 class="mb-0" ><strong>Update Category</strong></h5>
    <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i><a  href="{{ URL('category')}}">Category</a><i class="fa fa-angle-right"></i> Update </span>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
            @if (!is_null($category))
            <form method="post" action="{{ URL('category/update/' . $category->id) }}">         
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">

                    <div class="form-group floating-label">
                        <input name="category_name" class="form-control" value="{{ $category->name }}" type="text" required>
                        <label for="">Name Category</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" id= "Update" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div> 
</div>
</div>
@stop