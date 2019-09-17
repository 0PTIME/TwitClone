<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PollSubmission extends Model
{
  
    


    public function poll(){
        return $this->hasOne('App\Models\Poll');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
