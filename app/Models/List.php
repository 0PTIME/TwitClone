<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function owner(){
        return $this->belongsTo('App\User');
    }

    public function members(){
        return $this->hasMany('App\Models\ListMember');
    }

    public function subscribers(){
        return $this->hasMany('App\Models\ListSubscriber');
    }
}
