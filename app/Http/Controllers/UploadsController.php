<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;

class UploadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pfupload(){
        request()->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $img = Image::make(request()->image);
        $imgWidth = $img->width();
        $imgHeight = $img->height();
        $imgDiff = abs($imgHeight - $imgWidth);
        $imgYOffset = 0;
        $imgXOffset = 0;
        if($imgHeight > $imgWidth){
            $imgHeight = $imgWidth;
            $imgYOffset = intdiv($imgDiff, 2);
        }
        if($imgWidth > $imgHeight){
            $imgWidth = $imgHeight;
            $imgXOffset = intdiv($imgDiff, 2);
        }
        $img->crop($imgWidth, $imgHeight, $imgXOffset, $imgYOffset);
        $path = config('envars.profiles_path') . auth()->user()->id . "profilepic.png";
        $img->save($path);


        return back();
    }
}
