<div class="oneActionBarContainer">
    <div class="oneActionBarProfilePicWrapper">
        <img class="oneActionBarProfilePic" src="{{ route('profilePic', ['id' => $user->id, 'size' => 200])}}" alt="loading">
    </div>

    <div class="oneActionBarButtons">
        <div class="actionBarButton">
        </div>
        <div class="actionBarButton">
        </div>
        <div class="actionBarButton">
        </div>
        <div class="actionBarButton" onclick="document.getElementById('user{{ $user->id }}followbutton').click();">
            @if ($user->followed())
            <span>Unfollow</span>
            @else
            <span>Follow</span>            
            @endif
        </div>
        @include('ProfileElements.followform')
    </div>
</div>