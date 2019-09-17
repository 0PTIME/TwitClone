<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    
    



    public function yap(){
        return $this->hasOne('App\Models\Yap');
    }

    public function submits(){
        return $this->hasMany('App\Models\PollSubmit');
    }
}
