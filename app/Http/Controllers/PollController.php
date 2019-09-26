<?php

namespace App\Http\Controllers;

use App\Models\PollSubmission;
use App\Models\Yap;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showVoting(){
        return view('home');
    }

    public function showResults($id){
        $tweet = Yap::find($id);
        return view('polls.results')->with('tweet', $tweet);
    }

    public function submitOption($id, Request $request){
        $validated = $request->validate([
            'option' => 'required',
        ]);
        
        $tweet = Yap::find($id);
        
        $dup = PollSubmission::where([
            ['poll_id', $tweet->poll->id],
            ['user_id', auth()->user()->id],
        ])->first();
        
        if($dup !== null){
            $dup->option = $validated['option'];
            $dup->save();
            echo 0;
        }
        else{
            PollSubmission::create([
                'poll_id' => $tweet->poll->id,
                'user_id' => auth()->user()->id,
                'option' => $validated['option'],
            ]);
            echo 1;
        }
    }
}
