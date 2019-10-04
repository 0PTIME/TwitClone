@if ($main->content)
    <div class="tweet" id="tweet{{ $main->id }}">
        @include('TweetElements.retweetheader', ['tweet' => $main, 'user' => $main->user])
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $main, 'user' => $main->user])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $main, 'user' => $main->user])
                @include('TweetElements.bodyone', ['tweet' => $main, 'user' => $main->user])
            </div>
        </div>
    </div>
@else
    <div class="tweet borderBottom" id="tweet{{ $retweet->id }}">
        @include('TweetElements.retweetheader', ['tweet' => $main])
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $retweet, 'user' => $retweet->user])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $retweet, 'user' => $retweet->user])
                @if ($retweet->content)
                    @include('TweetElements.bodyone', ['tweet' => $retweet, 'user' => $retweet->user])
                @endif
                @if ($retweet->media->first())
                    @include('TweetElements.imgone', ['tweet' => $retweet, 'user' => $retweet->user])
                @endif
                @if ($retweet->poll)
                    @include('TweetElements.poll', ['tweet' => $retweet, 'user' => $retweet->user])
                @endif
                @include('TweetElements.footerone', ['tweet' => $retweet, 'user' => $retweet->user])
            </div>
        </div>
    </div>
@endif

