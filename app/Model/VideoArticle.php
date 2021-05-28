<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VideoArticle extends Model
{
    protected $fillable = ['category_id', 'title', 'description', 'media_id', 'video_media_id', 'slug', 'status', 'is_featured'];
    public function media()
    {
    	return $this->belongsTo('App\Model\Media');
    }

    public function videomedia()
    {
    	return $this->belongsTo('App\Model\Media', 'video_media_id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Model\ArticleCategory');
    }
}
