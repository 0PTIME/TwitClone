<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yapper') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bigCoverTransparent" id="bigCoverupTransparent"style="display: none;"></div>
    <div class="bigCoverOpacity" id="bigCoverupOpacity" style="display: none;"></div>
    <div class="absoluteTweet" id="showTweetComposition" style="display: none;">
        <div class="tweetCompMain">
            <div class="tweetCompMainPlaceholder">
                <div class="tweetCompHeaderBar">
                    <div class="tweetHeaderBarMainContent">
                        <div class="closeButton">
                            <img src="{{ url('/asset/icon/x/Blue/22') }}">
                        </div>
                    </div>
                </div>
                <div class="tweetCompMainContent">
                    <div class="tweetCompMainContentPlaceholder">
                        <div class="sideProfileMain">
        
                        </div>
                        <div class="tweetCompositionMain">
                            <div class="tweetCompostisionMainPlaceholder">
                                <div class="tweetMainCompositionArea">
            
                                </div>
                                <div class="tweetCompFooter">
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="leftMain">
        <div class="leftPlaceholder">
            <div class="leftContentHolder">
                <nav class="leftMainContent">
                    <div class="sidebarMenuContainer" onclick="location.href='{{ route('home') }}'">
                        <a href="{{ route('home') }}" class="sidebarMenuLinks">
                            <div class="sidebarMenuIcons">
                                <img src="{{ url('/asset/icon/dog/White') }}">
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='{{ route('home') }}'">
                        <a href="{{ route('home') }}" class="sidebarMenuLinks">
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "home")
                                    <img src="{{ url('/asset/icon/home/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/home/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "home" ? 'colorBlue' : ''}}">
                                <span>Home</span>
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='{{ route('explore') }}'">
                        <a href="{{ route('explore') }}" class="sidebarMenuLinks">
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "explore")
                                    <img src="{{ url('/asset/icon/hashtag/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/hashtag/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "explore" ? 'colorBlue' : ''}}">
                                <span>Explore</span>
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='{{ route('notifications') }}'">
                        <a href="{{ route('notifications') }}" class="sidebarMenuLinks">                    
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "notifications")
                                    <img src="{{ url('/asset/icon/bell/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/bell/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "notifications" ? 'colorBlue' : ''}}">
                                <span>Notifications</span>
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='{{ route('messages') }}'">
                        <a href="{{ route('messages') }}" class="sidebarMenuLinks">                    
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "messages")
                                    <img src="{{ url('/asset/icon/envelope/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/envelope/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "messages" ? 'colorBlue' : ''}}">
                                <span>Messages</span>
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='/i/bookmarks'">
                        <a href="/i/bookmarks" class="sidebarMenuLinks">                    
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "bookmarks")
                                    <img src="{{ url('/asset/icon/bookmark/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/bookmark/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "bookmarks" ? 'colorBlue' : ''}}">
                                <span>Bookmarks</span>
                            </div>
                        </a>
                    </div>
                    <div class="sidebarMenuContainer" onclick="location.href='/{{ auth()->user()->id }}/lists'">
                        <a href="/{{ auth()->user()->id }}/lists" class="sidebarMenuLinks">                    
                            <div class="sidebarMenuIcons">
                                @if (Route::currentRouteName() == "lists")
                                    <img src="{{ url('/asset/icon/page/Blue') }}">
                                @else
                                    <img src="{{ url('/asset/icon/page/White') }}">
                                @endif
                            </div>
                            <div class="sidebarMenuText {{ Route::currentRouteName() === "lists" ? 'colorBlue' : ''}}">
                                <span>Lists</span>
                            </div>
                        </a>
                    </div>
                    <form action="{{ route('profileUpload.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" id="ProfileInputFile" onchange="form.submit()" class="fileUpload">
                        <div class="sidebarMenuContainer">
                            <button type="button" class="sidebarMenuLinks" id="ProfileUploadButton">
                                <div class="sidebarMenuIcons">
                                    <img src="{{ url('/asset/' . Auth::user()->id . '/pic') }}" class="miniProfilePic">
                                </div>
                                <div class="sidebarMenuText">
                                    <span>Profile</span>
                                </div>
                            </button>
                        </div>
                    </form>
                    <div class="sidebarMenuContainer" onclick="document.getElementById('moreButton').click();">
                        <button class="sidebarMenuLinks" id="moreButton">
                            <div class="sidebarMenuIcons">
                                <img src="{{ url('/asset/icon/menu/White') }}">
                            </div>
                            <div class="sidebarMenuText">
                                <span>More</span>
                            </div>
                        </button>
                        <div class="dropdown-content" id="sidebarDropdownMenu" style="display: none;">
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                            <p class="temp">testing</p>
                        </div>
                    </div>
                </nav>
                <div class="sidebarMenuLinks">
                    <button class="bigTweetButton" id="bigTweetButtonId">Tweet</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="main">
        <div class="mainHeader">
            <p class="globalHeader">{{ Route::currentRouteName() }}</p>
        </div>
        <div class="mainPlaceholder"></div>
        @yield('content')
    </div>
    <div class="rightMain">
        <div class="rightPlaceholder">
            <div class="rightContentholder">
                <div class="rightMainContent">
                    <div class="homesearch">
                        <form action="search" method="GET">
                            <input type="text" class="searchBar" name="keyword" autocomplete="off">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>