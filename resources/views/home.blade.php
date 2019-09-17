@extends('layouts.home')

@section('pageHeader')
    Home
@endsection

@section('pageTitle')
    Yapper | Home
@endsection

@section('content')
    @foreach ($tweets as $tweet)
        <div class="tweet">
            <div class="showTweetImgContainer">
                <div class="showTweetImg show" id="showTweetImgId{{ $tweet->id }} genericId">
                    <img src="{{ route('tweetMedia', ['id' => $tweet->id]) }}" class="fullImg">
                </div>
            </div>
            <div class="tweetHeader show">

            </div>
            <div class="tweetBody">
                <div class="tweetProfile">
                    <img class="miniProfilePic" src="{{ route('profilePic', ['id' => $tweet->users_id,'size' => 50]) }}">
                </div>
                <div class="tweetContent">
                    <div class="tweetContentBody">
                        @if ($tweet->content)
                            <p>{{ $tweet->content }}</p>                            
                        @endif
                        @if ($tweet->media)
                        <img class="tweetPicture" onclick="showTweetImg({{ $tweet->id }})" src="{{ route('tweetMedia', ['id' => $tweet->id]) }}" alt="">
                        @endif
                    </div>
                    <div class="tweetContentFooteer">

                    </div>
                </div>
            </div>
        </div>
    @endforeach
    
@endsection
