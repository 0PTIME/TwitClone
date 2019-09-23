<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }
}
