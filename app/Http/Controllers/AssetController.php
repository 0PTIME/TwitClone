<?php

namespace App\Http\Controllers;

use App\Models\Yap;
use Illuminate\Http\Request;
use Image;

class AssetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function icon($name, $state = "White", $size = 25){
        $path = config('envars.icons_path');

        $new_path = $path . $name . $state . ".png";

        if(\file_exists($new_path)){
            return Image::make($new_path)->fit($size)->response();
        }
        return \response()->json(null);
    }

    public function profilePic($id, $size = 25){
        if(!isset($id)){ $id = "bogus"; }
        $path = config('envars.profiles_path') . $id . "profilepic.png";
        $def_path = config('envars.icons_path') . "defPicWhite.png";
        if(file_exists($path)){
            return Image::make($path)->fit($size)->response();
        }
        elseif(file_exists($def_path)){
            return Image::make($def_path)->fit($size)->response();
        }
        return \response()->json(null);
    }
    public function tweetMedia($id){
        $tweet = Yap::find($id);
        if($tweet->media->first()){
            $path = config('envars.tweet_media_path') . $tweet->media->first()->file_name;
            if(file_exists($path)){
                return Image::make($path)->response();
            }
            return \response()->json(null);
        }
    }
}
