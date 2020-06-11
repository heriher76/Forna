<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'description', 'slug', 'thumbnail', 'user_id'];

    public function user()
    {
      return $this->belongsTo('App\User', 'user_id');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment', 'news_id');
    }
}
