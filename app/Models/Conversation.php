<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function members(){
        return $this->hasMany('App\Models\ConversationMember');
    }

    public function messages(){
        return $this->hasMany('App\Models\Messages');
    }
}
