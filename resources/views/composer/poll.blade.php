<div class="tweetComposer clearfixing" style="display: none;"  id="pollContentId">
    <div class="tweetComposerBody">
        <div class="tweetComposerProfile">
            <img alt="loading" class="miniProfilePic" src="{{ route('profilePic', ['id' => auth()->user()->id,'size' => 50]) }}">
        </div>
        <div class="tweetComposerContent">
            <div class="tweetComposerContentBody" id="conetenteditableTwo" placeholder="Ask a question..." contenteditable></div>
            <div>
                <form action="{{ route('yap.poll') }}" name="tweetCompFUTwo" method="POST" enctype="multipart/form-data">
                    @csrf
                    <textarea name="content" id="textInputTwo" hidden></textarea>                    
                    <div class="pollMain">
                        <div class="pollOptionContainer">
                            <div class="pollOption">
                                <div class="highlightArea">
                                    <div class="topOption">
                                        <label for="optionOneInput">Choice 1</label>
                                    </div>
                                    <div class="bottomOption">
                                        <input class="pollInput" type="text" name="option_one" id="optionOneInput" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="pollOption">
                                <div class="highlightArea">
                                    <div class="topOption">
                                        <label for="optionTwoInput">Choice 2</label>
                                    </div>
                                    <div class="bottomOption">
                                        <input class="pollInput" type="text" name="option_two" id="optionTwoInput" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="pollOption">
                                <div class="highlightArea">
                                    <div class="topOption">
                                        <label for="optionThreeInput">Choice 3 (optional)</label>
                                    </div>
                                    <div class="bottomOption">
                                        <input class="pollInput" type="text" name="option_three" id="optionThreeInput" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="pollOption">
                                <div class="highlightArea">
                                    <div class="topOption">
                                        <label for="optionFourInput">Choice 4 (optional)</label>
                                    </div>
                                    <div class="bottomOption">
                                        <input class="pollInput" type="text" name="option_four" id="optionFourInput" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pollLeftContainer">
                            <div class="pollCloseImgWrapper" id="pollCloseId">
                                <img class="TwoTwoThreeZeroicon" alt="loading" src="{{ route('icon', ['name' => 'x', 'state' => 'White', 'size' => '22']) }}">
                            </div>
                        </div>
                        <div class="pollExpirationContainer">
                            <select name="time_days">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tweetComposerContentFooter">
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'image', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'gif', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'question', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem">
                    <div class="tweetFooterIconWrapper">
                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'smile', 'state' => 'Blue', 'size' => '22']) }}">
                    </div>
                </div>
                <div class="tweetComposerFooterItem" style="float: right;">
                    <button type="button" class="tweetSubmitButton" id="submitFormTwoId">Yap</button>
                </div>
            </div>
        </div>
    </div>
</div>