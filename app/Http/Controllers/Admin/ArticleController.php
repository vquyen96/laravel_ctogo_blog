<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use File;

class ArticleController extends Controller
{
	public function getArticle()
	{
		$articles = Article::orderBy('stt','asc')->get();
		return view( 'admin.article.article', compact('articles') );
	}

	public function getAddArticle()
	{
		$categories = Category::all();
		return view('admin.article.article-add', compact('categories'));
	}

	public function postAddArticle(Request $request)
	{
		$article = new Article;
		$article->title = $request->title;
		$article->slug = str_slug($request->title);
		$article->summary = $request->summary;
		$article->content = $request->content;
		$article->image = saveImage($request->image,450,'image');
		$article->hot = $request->hot;
		$article->stt = Article::max('stt') + 1;
		$article->save();
		$article->categories()->sync($request->category);
		return redirect('admin/article');
	}

	public function getEditArticle($id)
	{
		$article = Article::find($id);
		$categories = Category::all();
		$category_article = $this->getCategoryArticle($article);
		return view('admin.article.article-edit',compact('article','categories','category_article'));
	}

	public function postEditArticle($id, Request $request)
	{
		$article = Article::find($id);
		$article->title = $request->title;
		$article->slug = str_slug($request->title);
		$article->summary = $request->summary;
		$article->content = $request->content;
		if( $request->has('image') ){
			$this->handleDeleteImage($article->image);
			$article->image = saveImage($request->image,450,'image');
		}
		$article->hot = $request->hot;
		$article->save();
		$article->categories()->sync($request->category);
		return redirect('admin/article');
	}

	public function getDeleteArticle($id)
	{
		$image = Article::find($id)->image;

		$this->handleDeleteImage($image);

		Article::destroy($id);
		return back();
	}

	protected function getCategoryArticle($article)
	{
		$arr = [];
		foreach( $article->categories()->get() as $category ) {
			array_push($arr, $category->id);
		}
		return $arr;
	}

	protected function handleDeleteImage($image)
	{
		foreach( explode(',',$image) as $image ){
			File::delete('storage/app/image/'.$image,'storage/app/image/resized-'.$image);
		}
		return ;
	}

	public function handleChangeOrder($stt, Request $request)
    {
        $article1 = Article::where('stt',$stt)->first();
        $article1->stt = 0;
        $article1->save();

        $article2 = Article::where('stt',$request->stt)->first();
        if ( isset($article2) ) {
            $article2->stt = $stt;
            $article2->save();
        }
        $article1->stt = $request->stt;
        $article1->save();
        return back();
    }
}