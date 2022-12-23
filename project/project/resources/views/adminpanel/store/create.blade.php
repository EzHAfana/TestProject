@extends('layouts.main')

@section('content_body')

<div>
    <h5 class="mb-0" ><strong>Create Store</strong></h5>
    <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> <a  href="{{ URL('stores')}}">Store</a>  <i class="fa fa-angle-right"></i> Create </span>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
            <form method="post" action="{{ URL('stores/store') }}" enctype="multipart/form-data">
	                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group floating-label">
                        <input name="store_name" class="form-control" type="text" required>
                        <label for="">Name Store</label>
                    </div>
                    <div class="form-group floating-label">
                        <input name="store_phone" class="form-control" type="text" required>
                        <label for="">Phone Store</label>
                    </div>
                    <div class="form-group floating-label">
                        <input name="store_address" class="form-control" type="text" required>
                        <label for="">Address Store</label>
                    </div>
                    <div class="form-group floating-label">
                
                        <select name="catorgry_id" class="custom-select" type="text" required>
                            <option value=""></option>
                            @foreach ($catorgry as $catorgry)
								<option value="{{ $catorgry->id }}">{{ $catorgry->name }}</option>
							@endforeach
                        </select>
                        <label for="" class="mt-1">Choose</label>
                    </div>

					<div class="form-group">
						<label>image</label>
						<input type="file" name="image" class="form-control">
					</div>

                    <div class="form-group">
                        <button id="Create-Store" type="submit  " class="btn btn-primary">Create Store</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@stop