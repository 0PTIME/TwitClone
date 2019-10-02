<?php

namespace App\Http\Controllers;

use App\Models\Yap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $tweets = Yap::orderBy('created_at', 'DESC')->get();
        
        $tweets = Yap::join('follows', 'user_id', '=', 'followed_id')
            ->where('follower_id', '=', auth()->user()->id)
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('home', compact('tweets'));
    }
}
