<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ListMember extends Model
{
    protected $guarded = [];
    public $timestamps = false;


    public function list(){
        return $this->belongsTo('App\Models\List');
    }


    public function user(){
        return $this->hasOne('App\User');
    }
}
