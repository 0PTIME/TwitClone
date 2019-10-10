<div class="profileTwoContainer borderBottom">
    @include('TweetElements.profilepic', ['user' => $main])
    <div class="titletwoContainer">
        @include('ProfileElements.titleone', ['user' => $main])
        @include('ProfileElements.description', ['user' => $main])
        @include('ProfileElements.followform', ['user' => $main])
        <button  onclick="document.getElementById('user{{ $main->id }}followbutton').click();">Follow</button>
    </div>
</div>