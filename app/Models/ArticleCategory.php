<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_category';
    protected $fillable = ['article_id','category_id'];

    public function categories()
    {
     	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function articles()
    {
     	return $this->belongsTo('App\Models\Article', 'article_id');
    }
}
