<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'news_id'];

    public function user()
    {
      return $this->belongsTo('App\User', 'user_id');
    }

    public function news()
    {
      return $this->belongsTo('App\News', 'news_id');
    }
}
