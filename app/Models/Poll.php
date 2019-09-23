<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }

    public function submits(){
        return $this->hasMany('App\Models\PollSubmit');
    }
}
