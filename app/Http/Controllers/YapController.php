<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Yap;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

class YapController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curYap = Yap::create([
            'content' => $request->content,
            'user_id' => auth()->user()->id
        ]);
        
        if(isset($request->image)){
            $img = Image::make($request->image);
            $path = config('envars.tweet_media_path'). auth()->user()->id . $curYap->id . $request->image->getClientOriginalName();
            $img->save($path);
    
            Media::create([
                'yap_id' => $curYap->id,
                'file_name' => auth()->user()->id . $curYap->id . $request->image->getClientOriginalName(),
            ]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Yap  $yap
     * @return \Illuminate\Http\Response
     */
    public function show(Yap $yap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yap  $yap
     * @return \Illuminate\Http\Response
     */
    public function edit(Yap $yap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yap  $yap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yap $yap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yap  $yap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yap $yap)
    {
        if(request('tweet_owner') == auth()->user()->id){
            $yap->delete();
            echo $yap->id;
        }
        else{
            echo "fail";
        }
    }
}
