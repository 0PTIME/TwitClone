<div class="tweetHeader">
    <div class="tweetHeaderPicWrapper">
        <img alt="loading" class="tweetHeaderPic" src="{{ route('icon', ['name' => 'heart', 'state' => 'Black', 'size' => '12']) }}">
    </div>
    <a href="{{ route('profile', ['name' => $tweet->user->name]) }}" class="tweetOwnerName">{{ $tweet->user->name === auth()->user()->name ? 'You ' : $tweet->user->display_name }} Liked</a>
</div>