<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    


    public function tags(){
        return $this->belongsTo('App\Models\Tag');
    }
}
