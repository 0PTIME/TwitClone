<div class="tweetComposer clearfixing" id="mainContentId">
    <div class="tweetComposerBody">
        <div class="tweetComposerProfile">
            <img alt="loading" class="miniProfilePic" src="{{ route('profilePic', ['id' => auth()->user()->id,'size' => 50]) }}">
        </div>
        <div class="tweetComposerContent">
            <div class="tweetComposerContentBody" id="conetenteditable" placeholder="What's Happening?" contenteditable></div>
            <img alt="loading" class="tweetPicture show" src="#" id="tempPicLocation">
            <div class="tweetComposerContentFooter">
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper" id="mediaUploadId">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'image', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'gif', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper" id="pollOpenId">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'question', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'smile', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem" style="float: right;">
                    <form action="{{ route('yap.store') }}" name="tweetCompFU" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" id="tweetComposerMediaUpload" class="fileUpload">
                        <textarea name="content" id="textInput" hidden></textarea>
                        <button type="button" class="tweetSubmitButton" id="submitFormId">Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>