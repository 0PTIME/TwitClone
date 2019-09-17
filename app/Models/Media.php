<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    

    public function yap(){
        return $this->hasOne('App\Models\Yap');
    }
}
