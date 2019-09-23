<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function tags(){
        return $this->belongsTo('App\Models\Tag');
    }
}
