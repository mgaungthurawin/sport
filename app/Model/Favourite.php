<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $fillable = ['customer_id', 'article_id', 'type'];
}
