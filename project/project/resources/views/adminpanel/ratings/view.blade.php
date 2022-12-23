@extends('layouts.main')
@section('content_head')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
   
    <link rel="stylesheet"href="{{ asset('asset/js/calendar/bootstrap_calendar.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/color-01.css') }}">
</head>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/color-01.css') }}">
@stop

@section('content_body')
<style>
	.color-g {
		color:#e6e6e6 !important;
	}
</style>
<header id="header" class="header header-style-1">
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="mid-section main-info-area">
					<div class="wrap-search center-section">
						<div class="wrap-search-form">
							<form method="GET" action="{{ URL('rating/{id}') }}" id="form-search-top" name="form-search-top" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="text" name="search" value="" placeholder="Search here...">
								<button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<main id="main" class="main-site left-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
				<div class="row">
				<ul class="product-list grid-products equal-container">
						@foreach ($stores as $store)
						<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
							<div class="product product-style-3 equal-elem ">
								<div class="product-thumnail">
                                    <figure> <img src="{{ asset('/upload/product/'.$store->image) }}" alt=""></figure>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>{{ $store->name }}</span></a>
									<div class="wrap-price"><span class="product-price">{{ $store->phone}}</span></div>
									<div class="product-rating">
							@php
							 $xx = number_format( $store->avg)
							 @endphp
							@for($i=1; $i<=5; $i++)
								@if($i <= $xx )
								<i class="fa fa-star" aria-hidden="true"></i>
								@else
								<i class="fa fa-star color-g" aria-hidden="true"></i>
								@endif
							@endfor
                            </div>
									<a href="#" class="btn add-to-cart">( {{$store->count}} REVIEWS COUNT)</a>
							</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
                <div class="pagination-block">
				<?php //{{ $countries->links('layouts.paginationlinks') }} ?>
                   {{  $stores->appends(request()->input())->links('layouts.paginationlinks') }}
				</div>
        </div> 
       
	</div><!--end container-->
</main>
<script src="{{ asset('asset/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('asset/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('asset/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('asset/js/functions.js') }}"></script>
@stop














