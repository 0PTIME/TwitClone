<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function yap(){
        return $this->belongsTo('App\Models\Yap');
    }

    public function submissions(){
        return $this->hasMany('App\Models\PollSubmission');
    }

    public function expired(){
        $poll = $this;

        if($poll->expiration_date > now()){
            return false;
        }
        else{
            return true;
        }
    }

    public function numOpt(){
        $options = 2;
        if($this->option_three){
            $options = 3;
        }
        if($this->option_four){
            $options = 4;
        }
        return $options;
    }

    public function pollData(){
        $subColl = $this->submissions()->get();
        $optionNum['option_one'] = $subColl->where('option', 1)->count();
        $optionNum['option_two'] = $subColl->where('option', 2)->count();
        $optionNum['option_three'] = $subColl->where('option', 3)->count();
        $optionNum['option_four'] = $subColl->where('option', 4)->count();
        arsort($optionNum);
        $arrKeys = array_keys($optionNum);
        if($optionNum[$arrKeys[0]] == $optionNum[$arrKeys[1]]) { $winner = 5; } else{ $winner = array_key_first($optionNum); }
        $count = $subColl->count() === 0 ? 1 : $subColl->count();
        return [
            'count' => $count,
            'winner' => $winner,
            'option_one' => round((($optionNum['option_one'] / $count) * 100), 0),
            'option_two' => round((($optionNum['option_two'] / $count) * 100), 0),
            'option_three' => round((($optionNum['option_three'] / $count) * 100), 0),
            'option_four' => round((($optionNum['option_four'] / $count) * 100), 0),
        ];        
    }

    public function voted(){
        $sub = PollSubmission::where([
            ['poll_id', $this->id],
            ['user_id', auth()->user()->id],
        ])->first();
        if($sub !== null){
            return $sub->option;
        }
        elseif($sub === null){
            return false;
        }
        else{
            return false;
        }
    }
}
