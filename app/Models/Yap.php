<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yap extends Model
{
    use SoftDeletes;

    protected $fillable = ['users_id', 'content', 'retweet_of', 'reply_of'];

    public function media(){
        return $this->hasMany('App\Models\Media');
    }

    public function user(){
        return $this->hasOne('App\User');
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
        return $this->hasMany('App\Models\Bookmark');
    }

    public function poll(){
        return $this->hasOne('App\Models\Poll');
    }
}