<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';
	protected $fillable = ['name','icon','image','status'];

	public function articles()
	{
		return $this->belongsToMany('App\Models\Article', 'article_category', 'category_id', 'article_id');
	}

	public function article_category()
	{
		return $this->hasMany('App\Models\ArticleCategory','category_id');
	}
}
