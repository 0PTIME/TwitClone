<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }


    public function hashtag(){
        return $this->hasOne('App\Models\Hashtag');
    }
}
