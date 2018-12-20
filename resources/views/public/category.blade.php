@extends('public.master')

@section('title')
{{$category->name}}
@stop
@section('description','Website đặt phòng homestay chuyên nghiệp tại Việt Nam')
@section('image')
{{ asset('storage/app/public/header-footer/image/logo-color.png') }}
@stop

@section('header')
@include('public.header-2')
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="side-news/css/side-news.css">
<link rel="stylesheet" type="text/css" href="list-article/css/list-article.css">
<link rel="stylesheet" type="text/css" href="category/css/category.css">
@stop

@section('javascript')
@stop

@section('main')
<section class="section-1" style="background-image: url(http://bizweb.dktcdn.net/100/115/245/files/phu-quoc-1.jpg?v=1477623512199);">
	<div class="fog"></div>
	
	<div class="section-1-title-short section-1-title">{{$category->name}}</div>
</section>

<section class="hs-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				@include('public.list-article')
			</div>


			{{-- side news --}}
			<div class="col-lg-3 col-md-3 col-sm-12 col-12 offset-lg-1 offset-md-1">
				@include('public.side-news')
			</div>
		</div>
	</div>
</section>
@stop