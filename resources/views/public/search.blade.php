@extends('public.master')

@section('title','CTOGO BLOG')

@section('header')
@include('public.header-2')
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="side-news/css/side-news.css">
<link rel="stylesheet" type="text/css" href="list-article/css/list-article.css">
<link rel="stylesheet" type="text/css" href="search/css/search.css">
@stop

@section('javascript')
@stop

@section('main')
<section class="hs-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="search-key">Tìm kiếm từ khóa <span>"{{Request::get('keyword')}}"</span> ({{count($articles)}} kết quả)</h3>
			</div>
		</div>
	</div>
</section>

<section>
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