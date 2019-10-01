<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function follow($id){
        $follow = Follow::where([
            ['follower_id', auth()->user()->id],
            ['followed_id', $id],
        ])->delete();
        if($follow){
            echo '0';
        }
        else{
            Follow::create([
                'follower_id' => auth()->user()->id,
                'followed_id' => $id,
            ]);
            echo '1';
        }
    }
}
