<form action="{{ route('follow', ['user' => $user->id])}}" name="followForm" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <button id="user{{ $user->id }}followbutton" class="dropdownMenuItemButton" hidden></button>
</form>