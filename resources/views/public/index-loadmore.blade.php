@foreach($articles as $article)
    <div class="article">
        <a href="{{ asset('bai-viet/'.$article->slug.'/'.$article->id) }}" style="background-image: url(../image/{{$article->image}});" class="article-image"></a>
        <div class="article-tags mt-4">
            @foreach($article->categories as $category)
                <a href="{{ asset('danh-muc/'.$category->slug.'/'.$category->id) }}" class="article-tag">{{$category->name}}</a>
            @endforeach
        </div>
        <a href="{{ asset('bai-viet/'.$article->slug.'/'.$article->id) }}"><h3 class="article-title mt-3">{{$article->title}}</h3></a>
        <div class="article-time mt-3"><i class="far fa-clock"></i> {{ $article->created_at }}</div>
    </div>
@endforeach