<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PollSubmission extends Model
{
  
    protected $guarded = [];
    public $timestamps = false;

    public function poll(){
        return $this->belongsTo('App\Models\Poll');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
