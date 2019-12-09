<?php

namespace App\Http\Controllers;

use App\Models\ConversationMember;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        // $conversations = ConversationMember::where('user_id', '=', auth()->user()->id)->get();

        // dd($conversations);
        return view('messages');
    }
}
