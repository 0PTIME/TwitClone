<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationMember extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function conversation(){
        return $this->hasOne('App\Models\Conversation');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
