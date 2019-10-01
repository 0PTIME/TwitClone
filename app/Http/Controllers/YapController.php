<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Poll;
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
        if(isset($request['time_days']) && isset($request['option_one']) && isset($request['option_two'])){
            $validatedData = $request->validate([
                'content' => 'required|max:255',
                'time_days' => 'required',
                'option_one' => 'required|max:25',
                'option_two' => 'required|max:25',
                'option_three' => 'max:25',
                'option_four' => 'max:25',
            ]);    
            $curYap = Yap::create([
                'content' => $validatedData['content'],
                'user_id' => auth()->user()->id
            ]);
            $date = Date('Y-m-d H:i:s', strtotime("+" . $validatedData['time_days'] . " days"));            
            Poll::create([
                'yap_id' => $curYap->id,
                'expiration_date' => $date,
                'option_one' => $validatedData['option_one'],
                'option_two' => $validatedData['option_two'],
                'option_three' => $validatedData['option_three'],
                'option_four' => $validatedData['option_four'],
            ]);
        }
        else{
            $validatedData = $request->validate([
                'content' => 'required|max:255',
            ]);
            $curYap = Yap::create([
                'content' => $validatedData['content'],
                'user_id' => auth()->user()->id,
            ]);
        }


        if(isset($request['retweet_of'])){
            $curYap->retweet_of = $request['retweet_of'];
            $curYap->save();
        }
        
        if(isset($request['reply_of'])){
            $curYap->reply_of = $request['reply_of'];
            $curYap->save();
        }

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
    public function show(Yap $yap){
        return view('yap')->with(['main' => $yap]);
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
        if($yap->user_id === auth()->user()->id){
            $yap->delete();
            echo "tweet" . $yap->id;
        }
        else{
            echo "fail";
        }
    }

    public function createPoll(Request $request){
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'time_days' => 'required',
            'option_one' => 'required|max:25',
            'option_two' => 'required|max:25',
            'option_three' => 'max:25',
            'option_four' => 'max:25',
        ]);

        $curYap = Yap::create([
            'content' => $validatedData['content'],
            'user_id' => auth()->user()->id
        ]);
        $date = Date('Y-m-d H:i:s', strtotime("+" . $validatedData['time_days'] . " days"));
        
        Poll::create([
            'yap_id' => $curYap->id,
            'expiration_date' => $date,
            'option_one' => $validatedData['option_one'],
            'option_two' => $validatedData['option_two'],
            'option_three' => $validatedData['option_three'],
            'option_four' => $validatedData['option_four'],
        ]);

        return back();
    }
}
