@extends('public.master')

@section('title','CTOGO BLOG')
@section('description','Website đặt phòng homestay chuyên nghiệp tại Việt Nam')
@section('image')
{{ asset('storage/app/public/header-footer/image/logo-color.png') }}
@stop

@section('header')
@include('public.header-1')
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="index/css/index.css">
@stop

@section('javascript')
<script type="text/javascript" src="index/js/index.js"></script>
@stop

@section('main')

<section class="section-1" style="background-image: url(../image/{{$hot->image}});">
	<div class="fog"></div>
	
	<div class="section-1-title section-1-title-long">
		{{$hot->title}}
		<a href="{{ asset('bai-viet/'.$hot->slug.'/'.$hot->id) }}" class="section-1-button">Xem tiếp</a>
	</div>

</section>

<section class="section-2 hs-section">
	<div class="container">
		<div class="grid" id="results">
			{{--ajax load-more here--}}
		</div>

		<div class="loading center bold grey">Loading...</div>
	</div>
</section>
@stop