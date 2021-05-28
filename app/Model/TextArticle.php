<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TextArticle extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'media_id', 'slug', 'status', 'is_featured'];
    public function media()
    {
    	return $this->belongsTo('App\Model\Media');
    }
    public function category()
    {
    	return $this->belongsTo('App\Model\ArticleCategory');
    }
}
