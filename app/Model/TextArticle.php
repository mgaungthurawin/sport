<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TextArticle extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'media_id', 'status'];
    public function media()
    {
    	return $this->belongsTo('App\Model\Media');
    }
}
