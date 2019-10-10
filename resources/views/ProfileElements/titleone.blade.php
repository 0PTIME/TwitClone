<div class="titleOneContainer">
    <div class="titleOneDisplayNameContainer">
        <a href="{{ route('profile', ['name' => $user->name]) }}" class="titleOneDisplayName">{{ $user->display_name }}</a>
    </div>
    <div class="titleOneNameContainer">
        <span class="titleOneName"><span style="display: inline;">@</span>{{ $user->name }}</span>
    </div>
</div>