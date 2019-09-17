<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    




    public function yap(){
        return $this->hasOne('App\Models\Yap');
    }


    public function hashtag(){
        return $this->hasOne('App\Models\Hashtag');
    }
}
