@extends('public.master')

@section('title')
{{$article->title}}
@stop
@section('description')
{!!$article->summary!!}
@stop
@section('image')
{{ asset('storage/app/image/'.$article->image) }}
@stop

@section('header')
@include('public.header-1')
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="side-news/css/side-news.css">
<link rel="stylesheet" type="text/css" href="detail/css/detail.css">
@stop

@section('javascript')
@stop

@section('main')

<section class="section-1" style="background-image: url(../image/{{$article->image}});">
	<div class="fog"></div>
</section>

<section class="hs-section">
	<div class="container container-config">
		<div class="row">
			<div class="col-12">
				<h1>{{$article->title}}</h1>
				<div><i class="far fa-clock"></i> {{$article->created_at}}</div>
			</div>

			<div class="col-12">
				<div class="article-content bold mt-50">
					{!!$article->summary!!}
				</div>
			</div>

			<div class="col-12">
				<div class="article-content mt-4">
					{!!$article->content!!}	
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container container-config">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=893251737550173&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-like" data-href="{{URL::current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
		<div class="fb-comments" data-href="{{ URL::current() }}" data-numposts="5" data-width="100%"></div>
	</div>
</section>
@stop