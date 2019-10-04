<div class="tweetHeader">
    <div class="tweetHeaderPicWrapper">
        <img alt="loading" class="tweetHeaderPic" src="{{ route('icon', ['name' => 'heart', 'state' => 'Black', 'size' => '12']) }}">
    </div>
    <a href="{{ route('profile', ['name' => $user->name]) }}" class="tweetOwnerName">{{ $user->name === auth()->user()->name ? 'You ' : $user->display_name }} Liked</a>
</div>