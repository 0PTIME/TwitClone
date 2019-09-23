<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($id){
        $like = Like::where([
            ['user_id', auth()->user()->id],
            ['yap_id', $id],
        ])->delete();
        if($like){
            echo '0';
        }
        else{
            Like::create([
                'user_id' => auth()->user()->id,
                'yap_id' => $id,
            ]);
            echo '1';
        }
    }
}
