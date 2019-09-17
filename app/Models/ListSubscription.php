<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ListSubscription extends Model
{
    
    

    public function list(){
        return $this->hasOne('App\Models\List');
    }


    public function user(){
        return $this->hasOne('App\User');
    }
}
