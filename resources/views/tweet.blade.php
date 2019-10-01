<div class="bigCoverTransparent show" id="tweetCoverId"></div>
@isset($reply)
    <div class="tweet" id="tweet{{ $reply->id }}">
        @include('TweetElements.replyheader')
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $reply])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $reply])
                @if ($reply->content)
                    @include('TweetElements.bodyone', ['tweet' => $reply])                
                @endif
                @if ($reply->media->first())
                    @include('TweetElements.imgone', ['tweet' => $reply])
                @endif
                @if ($reply->poll)
                    @include('TweetElements.poll', ['tweet' => $reply])
                @endif
                @include('TweetElements.footerone', ['tweet' => $reply])
            </div>
        </div>
    </div>
@endisset
<div class="tweet borderBottom" id="tweet{{ $main->id }}">
    <div class="tweetBody">
        @include('TweetElements.profilepic', ['tweet' => $main])
        <div class="tweetContent">
            @include('TweetElements.titleone', ['tweet' => $main])
            @if ($main->content)
                @include('TweetElements.bodyone', ['tweet' => $main])                
            @endif
            @if ($main->media->first())
                @include('TweetElements.imgone', ['tweet' => $main])
            @endif
            @if ($main->poll)
                @include('TweetElements.poll', ['tweet' => $main])
            @endif
            @include('TweetElements.footerone', ['tweet' => $main])
        </div>
    </div>
</div>