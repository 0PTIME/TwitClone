<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
   
    


    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }


    public function user(){
        return $this->hasOne('App\User');
    }
}
