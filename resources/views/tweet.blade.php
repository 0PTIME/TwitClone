<div class="bigCoverTransparent show" id="tweetCoverId"></div>
@isset($reply)
    <div class="tweet" id="tweet{{ $reply->id }}">
        @include('TweetElements.replyheader')
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $reply, 'user' => $reply->user])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $reply, 'user' => $reply->user])
                @if ($reply->content)
                    @include('TweetElements.bodyone')                
                @endif
                @if ($reply->media->first())
                    @include('TweetElements.imgone', ['tweet' => $reply, 'user' => $reply->user])
                @endif
                @if ($reply->poll)
                    @include('TweetElements.poll', ['tweet' => $reply, 'user' => $reply->user])
                @endif
                @include('TweetElements.footerone', ['tweet' => $reply, 'user' => $reply->user])
            </div>
        </div>
    </div>
@endisset
<div class="tweet borderBottom" id="tweet{{ $main->id }}">
    <div class="tweetBody">
        @include('TweetElements.profilepic', ['tweet' => $main, 'user' => $main->user])
        <div class="tweetContent">
            @include('TweetElements.titleone', ['tweet' => $main, 'user' => $main->user])
            @if ($main->content)
                @include('TweetElements.bodyone', ['tweet' => $main])                
            @endif
            @if ($main->media->first())
                @include('TweetElements.imgone', ['tweet' => $main, 'user' => $main->user])
            @endif
            @if ($main->poll)
                @include('TweetElements.poll', ['tweet' => $main, 'user' => $main->user])
            @endif
            @include('TweetElements.footerone', ['tweet' => $main, 'user' => $main->user])
        </div>
    </div>
</div>