<?php

namespace App;

use App\Models\Follow;
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
        return $this->belongsToMany('App\Models\Mention');
    }

    public function pollSubmissions(){
        return $this->hasMany('App\Models\PollSubmission');
    }

    public function lists(){
        return $this->hasMany('App\Models\List');
    }

    public function listSubsrcriptions(){
        return $this->hasMany('App\Models\ListSubscription');
    }

    public function listsMember(){
        return $this->belongsTo('App\Models\ListMember');
    }

    public function followers(){
        return $this->hasMany('App\Models\Follow', 'follower_id');
    }

    public function follows(){
        return $this->hasMany('App\Models\Follow', 'followed_id');
    }

    public function followed(){
        $follow = Follow::where([
            ['follower_id', auth()->user()->id],
            ['followed_id', $this->id],
        ])->first();        
        if($follow){
            return true;
        }
        else { return false; }
    }
}
