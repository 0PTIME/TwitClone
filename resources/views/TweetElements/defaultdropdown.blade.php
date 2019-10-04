<div class="dropdownMenuItem">
    <p>Embed Tweet</p>
</div>
<div class="dropdownMenuItem" onclick="document.getElementById('tweet{{ $tweet->id }}followbutton').click();">
    <form id="tweet{{ $tweet->id }}follow" action="{{ route('follow', ['user' => $user->id])}}" name="followForm" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <button id="tweet{{ $tweet->id }}followbutton" class="dropdownMenuItemButton" hidden></button>
    </form>
    <p>
        @if ($user->followed())
            Unfollow
        @else
            Follow
        @endif 
    <div style="display: inline;">@</div><div style="display: inline;">{{ $user->name }}</div></p>
</div>
<div class="dropdownMenuItem">
    <p>Mute <div style="display: inline;">@</div><div style="display: inline;">{{ $user->name }}</div></p>
</div>
<div class="dropdownMenuItem">
    <p>Block <div style="display: inline;">@</div><div style="display: inline;">{{ $user->name }}</div></p>
</div>
<div class="dropdownMenuItem">
    <p>Report Tweet</p>
</div>