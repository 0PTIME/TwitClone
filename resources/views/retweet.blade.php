@if ($main->content)
    <div class="tweet" id="tweet{{ $main->id }}">
        @include('TweetElements.retweetheader', ['tweet' => $main])
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $main])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $main])
                @include('TweetElements.bodyone', ['tweet' => $main])
            </div>
        </div>
    </div>
@else
    <div class="tweet borderBottom" id="tweet{{ $retweet->id }}">
        @include('TweetElements.retweetheader', ['tweet' => $main])
        <div class="tweetBody marginfifteentop">
            @include('TweetElements.profilepic', ['tweet' => $retweet])
            <div class="tweetContent">
                @include('TweetElements.titleone', ['tweet' => $retweet])
                @if ($retweet->content)
                    @include('TweetElements.bodyone', ['tweet' => $retweet])
                @endif
                @if ($retweet->media->first())
                    @include('TweetElements.imgone', ['tweet' => $retweet])
                @endif
                @if ($retweet->poll)
                    @include('TweetElements.poll', ['tweet' => $retweet])
                @endif
                @include('TweetElements.footerone', ['tweet' => $retweet])
            </div>
        </div>
    </div>
@endif

