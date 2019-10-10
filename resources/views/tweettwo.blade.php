<div class="tweet borderBottom" id="tweet{{ $thread->id }}">
    <div class="tweetBody">
        @include('TweetElements.profilepic', ['tweet' => $thread, 'user' => $thread->user])
        <div class="titletwoContainer">
            @include('ProfileElements.titleone', ['tweet' => $thread, 'user' => $thread->user])
        </div>
        <div class="tweetContentTwo">
            @if ($thread->content)
                @include('TweetElements.bodytwo', ['tweet' => $thread])                
            @endif
            @if ($thread->media->first())
                @include('TweetElements.imgtwo', ['tweet' => $thread, 'user' => $thread->user])
            @endif
            @if ($thread->poll)
                @include('TweetElements.poll', ['tweet' => $thread, 'user' => $thread->user])
            @endif
            <div class="container">
                @include('TweetElements.timestamp', ['tweet' => $thread])
            </div>
            @include('TweetElements.footertwo', ['tweet' => $thread, 'user' => $thread->user])
        </div>
    </div>
</div>