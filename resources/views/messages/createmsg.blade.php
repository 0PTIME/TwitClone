<div class="tweetCompMain show" id="showCreateMsgid">
    <div class="tweetCompMainPlaceholder">
        <div class="tweetCompHeaderBar">
            <div class="tweetHeaderBarMainContent">
                <div class="closeButton">
                    <img alt="loading" src="{{ route('icon', ['name' => 'x', 'state' => 'Blue', 'size' => '22']) }}">
                </div>
            </div>
        </div>
        <div class="tweetCompMainContent">
            <div class="tweetCompMainContentPlaceholder">
                <div class="sideProfileMain">
                    <div class="tweetProfilePic">
                        <img alt="loading" src="{{ route('profilePic', ['id' => auth()->user()->id, 'size' => 50]) }}" class="miniProfilePic">
                    </div>        
                </div>
                <div class="tweetCompositionMain">
                    <div class="tweetCompostisionMainPlaceholder">
                        <div class="tweetMainCompositionArea">
                            <form action="{{ route('yap.store')  }}" method="post">
                                @csrf
                                <input type="text" name="content" placeholder="Enter Your Tweet Here..." autocomplete="off" required>
                                <input type="submit">
                            </form>
                        </div>
                        <div class="tweetCompFooter">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>