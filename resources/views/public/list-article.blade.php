@foreach($articles as $article)
<div class="article row">
	<div class="col-12 col-md-6 col-lg-6">
		<a href="{{ asset('bai-viet/'.$article->slug.'/'.$article->id) }}" style="background-image: url(../image/{{$article->image}});" class="article-image"></a>
	</div>
	<div class="col-12 col-md-6 col-lg-6">
		<div class="article-tags">
			@foreach($article->categories as $category)
			<a href="{{ asset('danh-muc/'.$category->slug.'/'.$category->id) }}" class="article-tag">{{$category->name}}</a>
			@endforeach
		</div>
		<a href="{{ asset('bai-viet/'.$article->slug.'/'.$article->id) }}"><h3 class="article-title mt-3">{{$article->title}}</h3></a>
		<div class="article-summary mt-4">{{cut_string($article->summary,200)}}</div>
		<div class="article-time mt-3"><i class="far fa-clock"></i> {{$article->created_at}}</div>
	</div>
</div>
@endforeach