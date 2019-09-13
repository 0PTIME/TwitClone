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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="bigCoverTransparent show" id="bigCoverupTransparent"></div>
    <div class="bigCoverOpacity show" id="bigCoverupOpacity"></div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="tweetCompMain show" id="showTweetComposition">
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
                        <div class="tweetProfilePic">
                            <img src="{{ url('/asset/' . Auth::user()->id . '/pic/50') }}" class="miniProfilePic">
                        </div>        
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
    <div class="leftMain">
        <div class="leftPlaceholder">
            <div class="leftContentHolder">
                <div class="bigCoverTransparent show" id="sidebarCoverupTransparent"></div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('home') }}'">
                    <div class="sidebarMenuLinks">
                        <img class="sidebarMenuElements" src="{{ url('/asset/icon/dog/White') }}">
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('home') }}'">
                    <div class="sidebarMenuLinks">
                        @if (Route::currentRouteName() == "home")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/home/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/home/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "home" ? 'colorBlue' : ''}}">Home</span>
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('explore') }}'">
                    <div class="sidebarMenuLinks">
                        @if (Route::currentRouteName() == "explore")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/hashtag/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/hashtag/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "explore" ? 'colorBlue' : ''}}">Explore</span>
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('notifications') }}'">
                    <div class="sidebarMenuLinks">                    
                        @if (Route::currentRouteName() == "notifications")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/bell/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/bell/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "notifications" ? 'colorBlue' : ''}}">Notifications</span>
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('messages') }}'">
                    <div class="sidebarMenuLinks">
                        @if (Route::currentRouteName() == "messages")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/envelope/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/envelope/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "messages" ? 'colorBlue' : ''}}">Messages</span>
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('bookmarks', ['id' => auth()->user()->id]) }}'">
                    <div class="sidebarMenuLinks">                    
                        @if (Route::currentRouteName() == "bookmarks")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/bookmark/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/bookmark/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "bookmarks" ? 'colorBlue' : ''}}">Bookmarks</span>
                    </div>
                </div>
                <div class="sidebarMenuContainer" onclick="location.href='{{ route('lists', ['id' => auth()->user()->id]) }}'">
                    <div class="sidebarMenuLinks">                    
                        @if (Route::currentRouteName() == "lists")
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/page/Blue') }}">
                        @else
                            <img class="sidebarMenuElements" src="{{ url('/asset/icon/page/White') }}">
                        @endif
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "lists" ? 'colorBlue' : ''}}">Lists</span>
                    </div>
                </div>
                <form action="{{ route('profileUpload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" id="ProfileInputFile" onchange="form.submit()" class="fileUpload">
                    <div class="sidebarMenuContainer" id="ProfileUploadButton">
                        <div type="button" class="sidebarMenuLinks">
                            <img class="miniProfilePic sidebarMenuElements" src="{{ url('/asset/' . Auth::user()->id . '/pic') }}" class="miniProfilePic">
                            <span class="sidebarMenuElements spanThingy">Profile</span>
                        </div>
                    </div>
                </form>
                <div class="sidebarMenuContainer" id="moreButton">
                    <div class="sidebarMenuLinks">
                        <img class="sidebarMenuElements" src="{{ url('/asset/icon/menu/White') }}">
                        <span class="sidebarMenuElements spanThingy">More</span>
                    </div>
                    <div class="dropdown-content show" id="sidebarDropdownMenu">
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
                <button class="bigTweetButton" id="bigTweetButtonId">Tweet</button>
                <button class="bigTweetButton" onclick="document.getElementById('logout-form').submit();">Temp Logout</button>                
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