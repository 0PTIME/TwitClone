<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yap extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'content', 'retweet_of', 'reply_of'];

    public function media(){
        return $this->hasMany('App\Models\Media');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->hasMany('App\Models\Tag');
    }

    public function mentions(){
        return $this->hasMany('App\Models\Mention');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function bookmarks(){
        return $this->belongsToMany('App\Models\Bookmark');
    }

    public function poll(){
        return $this->hasOne('App\Models\Poll');
    }

    public function retweetOf(){
        return $this->hasOne('App\Models\Yap');
    }

    public function replyOf(){
        return $this->belongsTo('App\Models\Yap');
    }

    public function replies(){
        return $this->hasMany('App\Models\Yap', 'reply_of');
    }

    public function retweets(){
        return $this->hasMany('App\Models\Yap', 'retweet_of');
    }
}