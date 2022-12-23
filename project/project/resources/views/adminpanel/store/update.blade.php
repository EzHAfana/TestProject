@extends('layouts.main')

@section('content_body')

<div>
    <h5 class="mb-0" ><strong>Update Store</strong></h5>
    <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> <a  href="{{ URL('stores')}}">Store</a>  <i class="fa fa-angle-right"></i> Update </span>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
            @if (!is_null($store))
            <form method="post" action="{{ URL('stores/update/' . $store->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
		
                    <div class="form-group floating-label">
                        <input name="store_name" class="form-control" value="{{ $store->name }}" type="text" required>
                        <label for="">Name Store</label>
                    </div>
                    <div class="form-group floating-label">
                        <input name="store_phone" class="form-control" value="{{ $store->phone }}" type="text" required>
                        <label for="">Phone Store</label>
                    </div>
                    <div class="form-group floating-label">
                        <input name="store_address" class="form-control" value="{{ $store->address }}" type="text" required>
                        <label for="">Address Store</label>
                    </div>
                    <div class="form-group floating-label">
                        <select name="catorgry_id" id="" class="custom-select" required>
                        <option value="{{ $catorgry->id }}">{{ $catorgry->name }}</option>
                            @foreach ($catorgrys as $catorgrys)
                                <option value="{{ $catorgrys->id }}">{{ $catorgrys->name }}</option>
                            @endforeach
                        </select>
                        <label for="" class="mt-1">Choose</label>
                    </div>

					<div class="form-group">
						<label>image</label>
						<input type="file" name="image" value="{{ $store->image }}" class="form-control">
					</div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update Store</button>
                    </div>
                </form>  @endif
            </div>
        </div>
    </div> 
</div>
@stop