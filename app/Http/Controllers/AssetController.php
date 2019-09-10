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

    public function icon($name, $color = "White"){
        $path = config('envars.icons_path');

        $new_path = $path . $name . $color . ".png";

        if(\file_exists($new_path)){
            return Image::make($new_path)->fit(24)->response();
        }
        return \response()->json(null);
    }

    public function profilePic($color = "White"){
        $path = config('envars.profiles_path');

        $new_path = $path . auth()->user()->id . "profilepic.png";
        $def_path = $path . "defPic" . $color . ".png";

        if(\file_exists($new_path)){
            return Image::make($new_path)->fit(24)->response();
        }
        else if(\file_exists($def_path)){
            return Image::make($def_path)->fit(24)->response();
        }
        return \response()->json(null);
    }
}
