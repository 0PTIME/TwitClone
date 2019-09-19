<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $guarded = [];


    public function sender(){
        return $this->belongsTo('App\User');
    }


    public function recipient(){
        return $this->hasOne('App\User');
    }
}
