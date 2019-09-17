<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    


    public function sender(){
        return $this->hasOne('App\User');
    }


    public function recipient(){
        return $this->hasOne('App\User');
    }
}
