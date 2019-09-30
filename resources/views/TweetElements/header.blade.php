<div class="tweetHeader">
    <div class="tweetHeaderPicWrapper">
        <img alt="loading" class="tweetHeaderPic" src="{{ route('icon', ['name' => $tweet->retweet_of !== null ? 'retweet' : $tweet->retweet_of !== null ? 'comment' : 'heart', 'state' => 'Black', 'size' => '12']) }}">
    </div>
    <a href="{{ route('profile', ['name' => $tweet->user->name]) }}" class="tweetOwnerName">{{ $tweet->user->name === auth()->user()->name ? 'You ' : $tweet->user->display_name' ' }}
        @if ($tweet->reply_of !== null)
            Replied
        @elseif ($tweet->retweet_of !== null)
            Retweeted
        @else
            Liked
        @endif
    </a>
</div>