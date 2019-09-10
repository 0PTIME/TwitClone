<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;

class UploadsController extends Controller
{
    public function pfupload(){
        request()->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $img = Image::make(request()->image)->resize(200,200);
        $path = config('envars.profiles_path') . auth()->user()->id . "profilepic.png";
        $img->save($path);


        return back();
    }
}
