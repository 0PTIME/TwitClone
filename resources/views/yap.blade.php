@extends('layouts.home')


{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- *************************************PAGE TITLE*************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('pageTitle')
    Yap
@endsection

{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************PAGE HEADER*************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('pageHeader')
    <div class="mainHeader">
        <p class="globalHeader">Yap</p>
    </div>
    <div class="defaultPlaceholder"></div>
@endsection


{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************HOME CONTENT************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('content')
    <div class="tweet borderBottom" id="tweet{{ $tweet->id }}">
        <div class="tweetBody">
            <div class="tweetProfile">
                <img alt="loading" class="miniProfilePic" src="{{ route('profilePic', ['id' => $tweet->user_id,'size' => 50]) }}">
            </div>
            <div class="tweetContent">
                <div class="tweetOwnerName">
                    <div class="tweetOwnerDisplayName">
                        {{ $tweet->user->display_name }}
                    </div>
                    <div style="display: inline;">@</div><div style="display: inline;">{{ $tweet->user->name }} · </div>
                </div>
                <div class="timeForHumans" title="{{ $tweet->created_at->format('g:i A') }} · {{ $tweet->created_at->format('M j, Y') }}">{{ $tweet->created_at->diffForHumans(null, 'DIFF_ABSOLUTE', true) }}</div>
                <div class="downArrWrapper" id="tweet{{ $tweet->id }}drop">
                    <div class="downArr"><img alt="loading" src="{{ route('icon', ['name' => 'downarr', 'color' => 'Black', 'size' => '15']) }}"></div>
                    <div class="dropdown-content show" id="tweet{{ $tweet->id }}dropdown">
                        <div class="dropdownMenuItem" onclick="document.getElementById('delete{{ $tweet->id }}button').click();">
                            <form id="tweet{{ $tweet->id }}delete" action="{{ route('yap.destroy', ['yap' => $tweet->id])}}" name="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="tweet_owner" value="{{ $tweet->user_id }}">
                                <button id="delete{{ $tweet->id }}button" class="dropdownMenuItemButton" hidden></button>
                                <p>DELETE</p>
                            </form>
                        </div>
                        <div class="dropdownMenuItem">
                            <p>testing</p>
                        </div>
                        <div class="dropdownMenuItem">
                            <p>testing</p>
                        </div>
                        <div class="dropdownMenuItem">
                            <p>testing</p>
                        </div>
                    </div>
                </div>
                <div class="tweetContentBody">
                    @if ($tweet->content)
                        <p>{{ $tweet->content }}</p>                            
                    @endif
                    @if ($tweet->media->first())
                        <img alt="loading" class="tweetPicture" onclick="showTweetImg({{ $tweet->id }})" src="{{ route('tweetMedia', ['id' => $tweet->id]) }}">
                    @endif
                </div>
                <div class="tweetContentFooter">
                    <div class="tweetFooterItem" onclick="location.href='{{ route('yap.show', ['yap' => $tweet->id])}}'">
                        <div class="tweetFooterIconWrapper">
                            <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'comment', 'state' => 'Black', 'size' => '18']) }}">
                            <span class="tweetFooterNum">{{ $tweet->replies->count() === 0 ? '' : $tweet->replies->count() }}</span>
                        </div>
                    </div>
                    <div class="tweetFooterItem">
                        <form name="retweetForm" action="{{ route('retweet', ['id' => $tweet->id]) }}" method="POST">
                            <div class="tweetFooterGreenIconWrapper" onclick="document.getElementById('retweet{{ $tweet->id }}button').click();">
                                <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'retweet', 'state' => $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                <span class="{{ $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'greenText' : '' }} tweetFooterNum">{{ $tweet->retweets->count() === 0 ? '' : $tweet->retweets->count() }}</span>
                            </div>
                            @csrf 
                            <button id="retweet{{ $tweet->id }}button" hidden></button>
                        </form>
                    </div>
                    <div class="tweetFooterItem">
                        <form name="likeForm" action="{{ route('like', ['id' => $tweet->id]) }}" method="POST">
                            <div class="tweetFooterRedIconWrapper" onclick="document.getElementById('like{{ $tweet->id }}button').click();">
                                <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'heart', 'state' => $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                <span class="{{ $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'redText' : '' }} tweetFooterNum">{{ $tweet->likes->count() === 0 ? '' : $tweet->likes->count() }}</span>
                            </div>
                            @csrf
                            <button id="like{{ $tweet->id }}button" hidden></button>
                        </form>
                    </div>
                    <div class="tweetFooterItem">
                        <div class="tweetFooterIconWrapper">
                            <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'upload', 'state' => 'Black', 'size' => '18']) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
