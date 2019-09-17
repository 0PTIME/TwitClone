<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    
    

    public function user(){
        return $this->hasOne('App\User');
    }

    public function yap(){
        return $this->hasOne('App\Models\Yap');
    }
}
