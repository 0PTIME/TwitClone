<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function yaps(){
        return $this->hasMany('App\Models\Yap');
    }

    public function messages(){
        return $this->hasMany('App\Models\Message');
    }

    public function bookmarks(){
        return $this->hasMany('App\Models\Bookmark');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }

    public function mentions(){
        return $this->hasMany('App\Models\Mention');
    }

    public function pollSubmissions(){
        return $this->hasMany('App\Models\PollSubmission');
    }

    public function lists(){
        return $this->hasMany('App\Models\List');
    }

    public function listsSubsribed(){
        return $this->hasMany('App\Models\ListSubscription');
    }

    public function listsMember(){
        return $this->hasMany('App\Models\ListMember');
    }
}
