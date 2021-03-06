<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $guarded = [];


    public function sender(){
        return $this->hasOne('App\User');
    }


    public function conversation(){
        return $this->hasOne('App\Models\Conversation');
    }
}
