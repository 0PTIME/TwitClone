<div class="divider"></div>
<span style="display: inline;">{{ $tweet->retweets->count() }}</span>
<span class="bottomPoll" style="display: inline;"> Retweets</span>
<span style="display: inline;">{{ $tweet->likes->count() }}</span>
<span class="bottomPoll" style="display: inline;"> Likes</span>
<div class="divider"></div>

<div class="tweetContentFooter">
    <div class="tweetFooterItem" onclick="location.href='{{ route('yap.show', ['yap' => $tweet->id])}}'">
        <div class="tweetFooterIconWrapper">
            <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'comment', 'state' => 'Black', 'size' => '18']) }}">
        </div>
    </div>
    <div class="tweetFooterItem">
        <form name="retweetForm" action="{{ route('retweet', ['id' => $tweet->id]) }}" method="POST">
            <div class="tweetFooterGreenIconWrapper" onclick="document.getElementById('retweet{{ $tweet->id }}button').click();">
                <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'retweet', 'state' => $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
            </div>
            @csrf 
            <button id="retweet{{ $tweet->id }}button" hidden></button>
        </form>
    </div>
    <div class="tweetFooterItem">
        <form name="likeForm" action="{{ route('like', ['id' => $tweet->id]) }}" method="POST">
            <div class="tweetFooterRedIconWrapper" onclick="document.getElementById('like{{ $tweet->id }}button').click();">
                <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'heart', 'state' => $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
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