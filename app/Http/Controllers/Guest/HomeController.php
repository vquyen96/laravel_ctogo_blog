<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\ArticleCategory;

class HomeController extends Controller
{
	public function getBlank()
	{
		return redirect('trang-chu');
	}

    public function getHome()
    {
        $hot = Article::with('categories')->orderBy('stt','asc')->first();
        $articles = Article::with('categories')->orderBy('stt','asc')->paginate(6);
    	return view('public.index',compact('hot','articles') );
    }

    public function loadMore(Request $request)
    {
        $page = $request->page ?? 0;
        $articles = Article::with('categories')->orderBy('stt','asc')->paginate(6);
        return view('public.index-loadmore',compact('articles'));
    }

    public function getCategory($slug,$id)
    {
        $category=Category::find($id);
        
        $side_articles = Article::with('categories')->inRandomOrder()->take(3)->get();

        $articles = [];
        foreach(Category::with('article_category')->find($id)->article_category as $article_category) {
            array_push( $articles, Article::with('categories')->find($article_category->article_id) );
        }
        $articles = array_reverse($articles);
    	return view('public.category', compact('category','articles','side_articles'));
    }

    public function getDetail($slug,$id)
    {
        $article = Article::find($id);
    	return view('public.detail',compact('article'));
    }

    public function getSearch(Request $request)
    {
        $side_articles = Article::with('categories')->inRandomOrder()->take(3)->get();

        $string = implode('%',explode(' ',$request->keyword));
        $articles = Article::where('title','like','%'.$string.'%')->orderBy('stt','asc')->get();
    	return view('public.search',compact('articles','side_articles'));
    }
}
