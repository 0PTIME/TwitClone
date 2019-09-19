<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $guraded = [];

    public function follower(){
        return $this->hasOne('App\User');
    }

    public function followed(){
        return $this->hasOne('App\User');
    }
}
