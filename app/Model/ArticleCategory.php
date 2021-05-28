<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['parent', 'order', 'name', 'slug', 'description', 'media_id', 'icon'];

    public function media()
    {
    	return $this->belongsTo('App\Model\Media');
    }
}
