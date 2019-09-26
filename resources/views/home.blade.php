@extends('layouts.home')



{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************PAGE HEADER*************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('pageHeader')
    <div class="mainHeader">
        <p class="globalHeader">Home</p>
    </div>
    <div class="defaultPlaceholder"></div>
@endsection


{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- *************************************PAGE TITLE*************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('pageTitle')
    Home
@endsection


{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ***********************************TWEET COMPOSER************************************* --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('tweetComposer')
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
@endsection



{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************HOME CONTENT************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
{{-- ************************************************************************************** --}}
@section('content')
    <div class="bigCoverTransparent show" id="tweetCoverId"></div>
    @foreach ($tweets as $tweet)
        <div class="showTweetImgContainer show">
            <div class="showTweetImg" id="showTweetImgId{{ $tweet->id }}">
                <img alt="loading" src="{{ route('tweetMedia', ['id' => $tweet->id]) }}" class="fullImg">
            </div>
        </div>
        {{-- ********************************************************* --}}
        {{-- **********************RETWEET TWEET********************** --}}
        {{-- ********************************************************* --}}
        @if ($tweet->retweet_of !== null)
            <div class="tweet" id="tweet{{ $tweet->id }}">
                <div class="tweetHeader">
                    <div class="tweetHeaderPicWrapper">
                        <img alt="loading" class="tweetHeaderPic" src="{{ route('icon', ['name' => 'retweet', 'state' => 'Black', 'size' => '12']) }}">
                    </div>
                    <a href="{{ route('profile', ['name' => $tweet->user->name]) }}" class="tweetOwnerName">{{ $tweet->user->name === auth()->user()->name ? 'You' : $tweet->user->display_name }} Retweeted</a>
                </div>
            </div>
        @endif
        {{-- ********************************************************* --}}
        {{-- ***********************REPLY TWEET*********************** --}}
        {{-- ********************************************************* --}}
        @if ($tweet->reply_of !== null)
            <div class="tweet" id="tweet{{ $tweet->id }}">
                <div class="tweetHeader">
                    <div class="tweetHeaderPicWrapper">
                        <img alt="loading" class="tweetHeaderPic" src="{{ route('icon', ['name' => 'retweet', 'state' => 'Black', 'size' => '12']) }}">
                    </div>
                    <a href="{{ route('profile', ['name' => $tweet->user->name]) }}" class="tweetOwnerName">{{ $tweet->user->name === auth()->user()->name ? 'You' : $tweet->user->display_name }} Replied</a>
                </div>
            </div>
        @endif
        {{-- ********************************************************* --}}
        {{-- ************************POLL TWEET*********************** --}}
        {{-- ********************************************************* --}}
        @if ($tweet->poll !== null)
            <div class="tweet" id="tweet{{ $tweet->id }}">
                <div class="tweetBody">
                    <div class="tweetProfile">
                        <img alt="loading" class="miniProfilePic" src="{{ route('profilePic', ['id' => $tweet->user_id,'size' => 50]) }}">
                    </div>
                    <div class="tweetContent">
                        <div class="tweetOwnerName">
                            <div class="tweetOwnerDisplayName">
                                {{ $tweet->user->display_name }}
                            </div>
                            <div style="display: inline;">@</div><div style="display: inline;">{{ $tweet->user->name }} · </div>
                        </div>
                        <div class="timeForHumans" title="{{ $tweet->created_at->format('g:i A') }} · {{ $tweet->created_at->format('M j, Y') }}">{{ $tweet->created_at->diffForHumans(null, 'DIFF_ABSOLUTE', true) }}</div>
                        <div class="downArrWrapper" id="tweet{{ $tweet->id }}drop">
                            <div class="downArr"><img alt="loading" src="{{ route('icon', ['name' => 'downarr', 'color' => 'Black', 'size' => '15']) }}"></div>
                            <div class="dropdown-content show" id="tweet{{ $tweet->id }}dropdown">
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
                                    <p>testing</p>
                                </div>
                                <div class="dropdownMenuItem">
                                    <p>testing</p>
                                </div>
                                <div class="dropdownMenuItem">
                                    <p>testing</p>
                                </div>
                            </div>
                        </div>
                        <div class="tweetContentBody">
                            @if ($tweet->content)
                                <p>{{ $tweet->content }}</p>                            
                            @endif
                            @if ($tweet->poll)
                                @if ($tweet->poll->expired() || $tweet->user_id === auth()->user()->id || $tweet->poll->voted())
                                    <iframe class="iframeDisplay" src="{{ route('displaypoll.results', ['id' => $tweet->id])}}" frameborder="0" style="height: {{ ($tweet->poll->numOpt() * 40) + 17 }}px"></iframe>                                  
                                @else
                                    <form action="{{ route('poll.submit', ['id' => $tweet->id])}}" method="POST" name="pollSubmissionForm">
                                        @csrf
                                        <div class="pollDisplayOptions" id="tweet{{ $tweet->id }}polloptions">
                                            <div class="pollDisplayOption" id="tweet{{ $tweet->id }}.1">
                                                <p>{{ $tweet->poll->option_one }}</p>
                                                <button type="submit" hidden></button>
                                            </div>
                                            <div class="pollDisplayOption" id="tweet{{ $tweet->id }}.2">
                                                    <button type="submit" hidden></button>
                                                    <p>{{ $tweet->poll->option_two }}</p>
                                            </div>
                                            @if ($tweet->poll->option_three)
                                                <div class="pollDisplayOption" id="tweet{{ $tweet->id }}.3">
                                                    <button type="submit" hidden></button>
                                                    <p>{{ $tweet->poll->option_three }}</p>
                                                </div>                                        
                                            @endif
                                            @if ($tweet->poll->option_four)
                                                <div class="pollDisplayOption" id="tweet{{ $tweet->id }}.4">
                                                    <button type="submit" hidden></button>
                                                    <p>{{ $tweet->poll->option_four }}</p>
                                                </div>                                        
                                            @endif                                    
                                        </div>
                                        <iframe id="tweet{{ $tweet->id }}resultsiframe" class="iframeDisplay show" src="{{ route('displaypoll.results', ['id' => $tweet->id])}}" frameborder="0" style="height: {{ ($tweet->poll->numOpt() * 40) + 17 }}px"></iframe>                                  
                                    </form>
                                @endif
                            @endif
                        </div>
                        <div class="tweetContentFooter">
                            <div class="tweetFooterItem">
                                <div class="tweetFooterIconWrapper">
                                    <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'comment', 'state' => 'Black', 'size' => '18']) }}">
                                    <span class="tweetFooterNum">{{ $tweet->replies->count() === 0 ? '' : $tweet->replies->count() }}</span>
                                </div>
                            </div>
                            <div class="tweetFooterItem">
                                <form name="retweetForm" action="{{ route('retweet', ['id' => $tweet->id]) }}" method="POST">
                                    <div class="tweetFooterGreenIconWrapper" onclick="document.getElementById('retweet{{ $tweet->id }}button').click();">
                                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'retweet', 'state' => $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                        <span class="{{ $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'greenText' : '' }} tweetFooterNum">{{ $tweet->retweets->count() === 0 ? '' : $tweet->retweets->count() }}</span>
                                    </div>
                                    @csrf 
                                    <button id="retweet{{ $tweet->id }}button" hidden></button>
                                </form>
                            </div>
                            <div class="tweetFooterItem">
                                <form name="likeForm" action="{{ route('like', ['id' => $tweet->id]) }}" method="POST">
                                    <div class="tweetFooterRedIconWrapper" onclick="document.getElementById('like{{ $tweet->id }}button').click();">
                                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'heart', 'state' => $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                        <span class="{{ $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'redText' : '' }} tweetFooterNum">{{ $tweet->likes->count() === 0 ? '' : $tweet->likes->count() }}</span>
                                    </div>
                                    @csrf
                                    <button id="like{{ $tweet->id }}button" hidden></button>
                                </form>
                            </div>
                            <div class="tweetFooterItem">
                                <div class="tweetFooterIconWrapper">
                                    <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'upload', 'state' => 'Black', 'size' => '18']) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        @endif
        {{-- ********************************************************* --}}
        {{-- ***********************REG TWEET************************* --}}
        {{-- ********************************************************* --}}
        @if ($tweet->reply_of === null && $tweet->retweet_of === null && $tweet->poll === null)
            <div class="tweet" id="tweet{{ $tweet->id }}">
                <div class="tweetBody">
                    <div class="tweetProfile">
                        <img alt="loading" class="miniProfilePic" src="{{ route('profilePic', ['id' => $tweet->user_id,'size' => 50]) }}">
                    </div>
                    <div class="tweetContent">
                        <div class="tweetOwnerName">
                            <div class="tweetOwnerDisplayName">
                                {{ $tweet->user->display_name }}
                            </div>
                            <div style="display: inline;">@</div><div style="display: inline;">{{ $tweet->user->name }} · </div>
                        </div>
                        <div class="timeForHumans" title="{{ $tweet->created_at->format('g:i A') }} · {{ $tweet->created_at->format('M j, Y') }}">{{ $tweet->created_at->diffForHumans(null, 'DIFF_ABSOLUTE', true) }}</div>
                        <div class="downArrWrapper" id="tweet{{ $tweet->id }}drop">
                            <div class="downArr"><img alt="loading" src="{{ route('icon', ['name' => 'downarr', 'color' => 'Black', 'size' => '15']) }}"></div>
                            <div class="dropdown-content show" id="tweet{{ $tweet->id }}dropdown">
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
                                    <p>testing</p>
                                </div>
                                <div class="dropdownMenuItem">
                                    <p>testing</p>
                                </div>
                                <div class="dropdownMenuItem">
                                    <p>testing</p>
                                </div>
                            </div>
                        </div>
                        <div class="tweetContentBody">
                            @if ($tweet->content)
                                <p>{{ $tweet->content }}</p>                            
                            @endif
                            @if ($tweet->media->first())
                                <img alt="loading" class="tweetPicture" onclick="showTweetImg({{ $tweet->id }})" src="{{ route('tweetMedia', ['id' => $tweet->id]) }}">
                            @endif
                        </div>
                        <div class="tweetContentFooter">
                            <div class="tweetFooterItem">
                                <div class="tweetFooterIconWrapper">
                                    <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'comment', 'state' => 'Black', 'size' => '18']) }}">
                                    <span class="tweetFooterNum">{{ $tweet->replies->count() === 0 ? '' : $tweet->replies->count() }}</span>
                                </div>
                            </div>
                            <div class="tweetFooterItem">
                                <form name="retweetForm" action="{{ route('retweet', ['id' => $tweet->id]) }}" method="POST">
                                    <div class="tweetFooterGreenIconWrapper" onclick="document.getElementById('retweet{{ $tweet->id }}button').click();">
                                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'retweet', 'state' => $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                        <span class="{{ $tweet->retweets->where('user_id', auth()->user()->id)->count() === 1 ? 'greenText' : '' }} tweetFooterNum">{{ $tweet->retweets->count() === 0 ? '' : $tweet->retweets->count() }}</span>
                                    </div>
                                    @csrf 
                                    <button id="retweet{{ $tweet->id }}button" hidden></button>
                                </form>
                            </div>
                            <div class="tweetFooterItem">
                                <form name="likeForm" action="{{ route('like', ['id' => $tweet->id]) }}" method="POST">
                                    <div class="tweetFooterRedIconWrapper" onclick="document.getElementById('like{{ $tweet->id }}button').click();">
                                        <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'heart', 'state' => $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'Active' : 'Black', 'size' => '18']) }}">
                                        <span class="{{ $tweet->likes->where('user_id', auth()->user()->id)->count() === 1 ? 'redText' : '' }} tweetFooterNum">{{ $tweet->likes->count() === 0 ? '' : $tweet->likes->count() }}</span>
                                    </div>
                                    @csrf
                                    <button id="like{{ $tweet->id }}button" hidden></button>
                                </form>
                            </div>
                            <div class="tweetFooterItem">
                                <div class="tweetFooterIconWrapper">
                                    <img alt="loading" class="tweetFooterIcon" src="{{ route('icon', ['name' => 'upload', 'state' => 'Black', 'size' => '18']) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach    
@endsection
