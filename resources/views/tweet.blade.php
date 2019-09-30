<div class="tweet borderBottom" id="tweet{{ $tweet->id }}">
    @if ($tweet->retweet_of || $tweet->reply_of)
        @include('TweetElements.header')
    @endif
    @isset($reply)
        
    @endisset
    <div class="tweetBody">
        @include('TweetElements.profilepic')
        <div class="tweetContent">
            @include('TweetElements.titleone')
            @if ($tweet->retweet_of)
                @if ($tweet->content)
                    @include('TweetElements.bodyone')
                    @include('view.retweet', ['tweet' => $retweet])
                @else
                    @include('TweetElements.bodyone')
                @endif
            @endif
            @if ($tweet->media->first())
                @include('TweetElements.imgone')
            @endif
            @if ($tweet->poll)
                @include('TweetElements.poll')
            @endif
            @include('TweetElements.footerone')
        </div>
    </div>
</div>