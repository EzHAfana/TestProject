@extends('layouts.main')

@section('content_body')
@if (session()->has('add_category_status'))
    <div class="col-lg-12">
        @if (session('add_category_status'))
            <div class="alert alert-success">SUCCESS</div>
        @else
            <div class="alert alert-danger">FAILED</div>
        @endif
    </div>
@endif
<div>
    <h5 class="mb-0" ><strong>Create Category</strong></h5>
    <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i><a  href="{{ URL('category')}}">Category</a> <i class="fa fa-angle-right"></i> Create </span>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
            <form method="post" action="{{ URL('category/store') }}" enctype="multipart/form-data">
	                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group floating-label">
                        <input name="category_name" class="form-control" type="text" required>
                        <label for="">Name Category</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="Create" class="btn btn-primary">Create Category</button>
                    </div>
                </form>
            </div>
            <!--Floating label-->
        </div>
    </div> 
</div>
@stop