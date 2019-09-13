<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class AssetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function icon($name, $color = "White", $size = 25){
        $path = config('envars.icons_path');

        $new_path = $path . $name . $color . ".png";

        if(\file_exists($new_path)){
            return Image::make($new_path)->fit($size)->response();
        }
        return \response()->json(null);
    }

    public function profilePic($id, $size = 25){
        if(!isset($id)){ $id = auth()->user()->id; }
        $path = config('envars.profiles_path') . $id . "profilepic.png";
        $def_path = config('envars.profiles_path') . "defPicWhite.png";
        if(file_exists($path)){
            return Image::make($path)->fit($size)->response();
        }
        elseif(file_exists($def_path)){
            return Image::make($def_path)->fit($size)->response();
        }
        return \response()->json(null);
    }
}
