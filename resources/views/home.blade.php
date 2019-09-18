@extends('layouts.home')

@section('pageHeader')
    Home
@endsection

@section('pageTitle')
    Yapper | Home
@endsection

@section('content')
    <script>
        function showDropdownMenu(id){
            document.getElementById('tweetCoverId').style.display = "block";
            document.getElementById(id).style.display = "block";
        }

        window.onclick = function(event){
            var classes = event.toElement.classList;
            if(classes.contains('bigCoverTransparent')){
                document.getElementById('tweetCoverId').style.display = "none";
                var ele = document.getElementsByClassName('dropdown-content');
                for(var i = 0; i < ele.length; i++){
                    ele[i].style.display = "none";
                }
            }
        }
    </script>
    <div class="bigCoverTransparent show" id="tweetCoverId"></div>
    @foreach ($tweets as $tweet)
        <div class="tweet">
            <div class="showTweetImgContainer">
                <div class="showTweetImg show" id="showTweetImgId{{ $tweet->id }} genericId">
                    <img src="{{ route('tweetMedia', ['id' => $tweet->id]) }}" class="fullImg">
                </div>
            </div>
            @if ($tweet->retweet_of !== null)
                <div class="tweetHeader" style="font-size: 13px;">
                    <div class="tweetOwnerName">{{ $tweet->user->display_name }} Retweeted</div>
                </div>
            @endif
            @if ($tweet->reply_of !== null)
                <div class="tweetHeader" style="font-size: 13px;">
                    <div class="tweetOwnerName">{{ $tweet->user->display_name }} Retweeted</div>
                </div>
            @endif
            @if ($tweet->reply_of === null && $tweet->retweet_of === null)
                <div class="tweetBody">
                    <div class="tweetProfile">
                        <img class="miniProfilePic" src="{{ route('profilePic', ['id' => $tweet->user_id,'size' => 50]) }}">
                    </div>
                    <div class="tweetContent">
                        <div class="tweetOwnerName">
                            <div class="tweetOwnerDisplayName">
                                {{ $tweet->user->display_name }}
                            </div>
                            <div style="display: inline;">@</div><div style="display: inline;">{{ $tweet->user->name }} · </div>
                        </div>
                        <div class="timeForHumans">{{ $tweet->created_at->diffForHumans() }}</div>
                        <div class="downArrWrapper" onclick="showDropdownMenu('{{ $tweet->id }}dropdown')">
                            <div class="downArr"><img src="{{ route('icon', ['name' => 'downarr', 'color' => 'Black', 'size' => '15']) }}"></div>
                            <div>
                                <div class="dropdown-content show" id="{{ $tweet->id }}dropdown">
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                    <p class="temp">testing</p>
                                </div>
                            </div>
                        </div>
                        <div class="tweetContentBody">
                            @if ($tweet->content)
                                <p>{{ $tweet->content }}</p>                            
                            @endif
                            @if ($tweet->media)
                            <img class="tweetPicture" onclick="showTweetImg({{ $tweet->id }})" src="{{ route('tweetMedia', ['id' => $tweet->id]) }}" alt="">
                            @endif
                        </div>
                        <div class="tweetContentFooter">
    
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endforeach    
@endsection
