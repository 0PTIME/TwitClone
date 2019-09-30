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