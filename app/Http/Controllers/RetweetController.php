<?php

namespace App\Http\Controllers;

use App\Models\Yap;
use Illuminate\Http\Request;

class RetweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retweet($id){
        $retweet = Yap::where([
            ['user_id', auth()->user()->id],
            ['retweet_of', $id],
        ])->delete();
        if($retweet){
            echo '0';
        }
        else{
            Yap::create([
                'user_id' => auth()->user()->id,
                'retweet_of' => $id,
            ]);
            echo '1';
        }
    }
}
