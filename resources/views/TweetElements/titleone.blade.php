<div class="tweetTitleContainer">
    <a href="{{ route('profile', ['name' => $user->name]) }}" class="tweetOwnerName">
        <div class="tweetOwnerDisplayName">
            {{ $user->display_name }}
        </div>
        <div style="display: inline;">@</div><div style="display: inline;">{{ $user->name }} · </div>
    </a>
    <div class="timeForHumans" title="{{ $tweet->created_at->format('g:i A') }} · {{ $tweet->created_at->format('M j, Y') }}">{{ $tweet->created_at->diffForHumans(null, true, true) }}</div>
    <div class="downArrWrapper" id="tweet{{ $tweet->id }}drop">
        <div class="downArr"><img alt="loading" src="{{ route('icon', ['name' => 'downarr', 'color' => 'Black', 'size' => '15']) }}"></div>
        <div class="dropdown-content show" id="tweet{{ $tweet->id }}dropdown">
            @if ($tweet->user_id == auth()->user()->id)
                @include('TweetElements.ownerdropdown')
            @else
                @include('TweetElements.defaultdropdown')
            @endif
        </div>
    </div>
</div>