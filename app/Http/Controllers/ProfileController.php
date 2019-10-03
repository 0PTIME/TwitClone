<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($name){
        $user = User::where('name', '=', $name)->firstOrFail();
        if($user){
            $tweets = $user->yaps->reverse();
            return view('profile')->with('user', $user)->with('tweets', $tweets);
        }
    }
}
