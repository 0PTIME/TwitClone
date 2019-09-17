<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    

    public function owner(){
        return $this->hasOne('App\User');
    }

    public function members(){
        return $this->hasMany('App\Models\ListMember');
    }

    public function subscribers(){
        return $this->hasOne('App\Models\ListSubscriber');
    }
}
