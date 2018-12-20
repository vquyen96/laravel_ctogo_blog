<div class="side-article">
	<div class="side-article-heading mb-4">Có thể bạn quan tâm</div>
	@foreach($side_articles as $side_article)
	<div class="side-article">
		<a href="{{ asset('bai-viet/'.$side_article->slug.'/'.$side_article->id) }}" class="side-article-image" style="background-image: url(../image/{{$side_article->image}})"></a>
		<div class="side-article-tags">
			@foreach($side_article->categories as $category)
			<a href="{{ asset('danh-muc/'.$category->slug.'/'.$category->id) }}" class="side-article-tag">{{$category->name}}</a>
			@endforeach
		</div>
		<a href="{{ asset('bai-viet/'.$side_article->slug.'/'.$side_article->id) }}"><h3 class="side-article-title mt-3">{{$side_article->title}}</h3></a>
	</div>
	@endforeach
</div>