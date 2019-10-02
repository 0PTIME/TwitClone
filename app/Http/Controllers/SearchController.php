<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request){
        $validatedData = $request->validate([
            'searched' => 'required'
        ]);
        $searched = $validatedData['searched'];
        if($searched !== null || $searched !== ' '){
            $users = User::where('name', 'LIKE', '%' . $searched . '%')
                ->orWhere('display_name', 'LIKE', '%' . $searched . '%')
                ->get();
            
            if(count($users) > 0){
                return view('search')->with('users', $users)->with('searched', $searched);
            }
        }
        return view('search')->with('message', 'no users found!')->with('searched', $searched);
    }
}
