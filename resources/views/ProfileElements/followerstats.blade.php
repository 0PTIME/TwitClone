<div class="followerStatsContainer">
    <div class="followerCount">
        <span style="display:inline;">{{ number_format($user->followed()->count()) }}</span>
        <span style="display:inline;"> Following</span>
    </div>
    <div class="followerCount">
        <span style="display:inline;">{{ number_format($user->followers()->count()) }}</span>
        <span style="display:inline;"> Followers</span>
    </div>
</div>