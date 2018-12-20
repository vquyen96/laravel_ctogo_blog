<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $guard = [];

    public function categories()
    {
     	return $this->belongsToMany('App\Models\Category', 'article_category', 'article_id', 'category_id');
    }

    public function article_category()
    {
    	return $this->hasMany('App\Models\ArticleCategory','article_id');
    }
}
