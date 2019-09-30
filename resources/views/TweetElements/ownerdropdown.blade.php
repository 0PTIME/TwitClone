<div class="dropdownMenuItem" onclick="document.getElementById('delete{{ $tweet->id }}button').click();">
    <form id="tweet{{ $tweet->id }}delete" action="{{ route('yap.destroy', ['yap' => $tweet->id])}}" name="deleteForm" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="tweet_owner" value="{{ $tweet->user_id }}">
        <button id="delete{{ $tweet->id }}button" class="dropdownMenuItemButton" hidden></button>
        <p>DELETE</p>
    </form>
</div>
<div class="dropdownMenuItem">
    <p>Pin to your profile</p>
</div>
<div class="dropdownMenuItem">
    <p>Embed Tweet</p>
</div>
<div class="dropdownMenuItem">
    <p>View Tweet activity</p>
</div>