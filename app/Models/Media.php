<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }
}
