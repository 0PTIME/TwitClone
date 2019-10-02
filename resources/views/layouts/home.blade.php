<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yapper | @yield('pageTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="favicon.ico" rel="icon" type="image/ico">
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
    <div class="leftMain">
        <div class="leftPlaceholder">
            <div class="leftContentHolder">
                <div class="bigCoverTransparent show" id="sidebarCoverupTransparent"></div>
                <div class="sidebarMenuContainerCurrent" onclick="location.href='{{ route('home') }}'">
                    <div class="sidebarMenuLinks">
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'dog']) }}">
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "home" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('home') }}'">
                    <div class="sidebarMenuLinks">
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'home', 'state' => Route::currentRouteName() === "home" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "home" ? 'colorBlue' : ''}}">Home</span>
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "explore" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('explore') }}'">
                    <div class="sidebarMenuLinks">
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'hashtag', 'state' => Route::currentRouteName() === "explore" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "explore" ? 'colorBlue' : ''}}">Explore</span>
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "notifications" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('notifications') }}'">
                    <div class="sidebarMenuLinks">                    
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'bell', 'state' => Route::currentRouteName() === "notifications" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "notifications" ? 'colorBlue' : ''}}">Notifications</span>
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "messages" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('messages') }}'">
                    <div class="sidebarMenuLinks">
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'envelope', 'state' => Route::currentRouteName() === "messages" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "messages" ? 'colorBlue' : ''}}">Messages</span>
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "bookmarks" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('bookmarks', ['id' => auth()->user()->id]) }}'">
                    <div class="sidebarMenuLinks">                    
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'bookmark', 'state' => Route::currentRouteName() === "bookmarks" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "bookmarks" ? 'colorBlue' : ''}}">Bookmarks</span>
                    </div>
                </div>
                <div class="{{ Route::currentRouteName() === "lists" ? 'sidebarMenuContainerCurrent' : 'sidebarMenuContainer' }}" onclick="location.href='{{ route('lists', ['id' => auth()->user()->id]) }}'">
                    <div class="sidebarMenuLinks">                    
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'page', 'state' => Route::currentRouteName() === "lists" ? 'Blue' : 'White']) }}">
                        <span class="sidebarMenuElements spanThingy {{ Route::currentRouteName() === "lists" ? 'colorBlue' : ''}}">Lists</span>
                    </div>
                </div>
                <form action="{{ route('profileUpload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" id="ProfileInputFile" onchange="form.submit()" class="fileUpload">
                    <div class="sidebarMenuContainerCurrent" id="ProfileUploadButton">
                        <div class="sidebarMenuLinks">
                            <img alt="loading" class="miniProfilePic sidebarMenuElements" src="{{ route('profilePic', ['id' => auth()->user()->id]) }}">
                            <span class="sidebarMenuElements spanThingy">Profile</span>
                        </div>
                    </div>
                </form>
                <div class="sidebarMenuContainer" id="moreButton">
                    <div class="sidebarMenuLinks">
                        <img alt="loading" class="sidebarMenuElements" src="{{ route('icon', ['name' => 'menu']) }}">
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
        @yield('pageHeader')
        @yield('tweetComposer')
        @yield('content')
    </div>
    <div class="rightMain">
        <div class="rightPlaceholder">
            <div class="rightContentHolder">
                <div class="rightMainContent" id="rightMain">
                    <div class="homesearch">
                        <form action="{{ route('search' )}}" class="searchBar" method="POST">
                            @csrf
                            <input type="text" class="searchInput" name="searched" autocomplete="off" placeholder="Seach Yapper">
                        </form>
                    </div>
                    <div class="defaultPlaceholder"></div>
                    <div class="twitterItem">
                        <h1 class="globalHeader">TRENDING</h1>
                        <div class="twitterItemContent"></div>
                        <div class="twitterItemContent">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie eros vel vehicula rutrum.
                        </div>
                        <div class="twitterItemContent">
                            Duis a tincidunt orci. Ut et diam ut ipsum aliquam dignissim a id tellus.
                        </div>
                        <div class="twitterItemContent">
                            Sed id vestibulum nisl, eu convallis quam.
                        </div>
                        <div class="twitterItemContent">
                            Cras id tincidunt lectus. Phasellus cursus ullamcorper sodales. Vestibulum diam nisl, egestas sed odio eget, tempor varius tellus. Vestibulum eu neque at tellus tristique volutpat. Proin vel mattis tellus, eget pellentesque sem. Pellentesque vitae lorem pulvinar, sollicitudin libero id, finibus sapien.
                        </div>
                        <div class="twitterItemContent">
                            Suspendisse ligula orci, rutrum ut mollis non, commodo ut ligula.
                        </div>
                        <div class="twitterItemContent">
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </div>
                    </div>
                    <div class="twitterItem">
                        <h1 class="globalHeader">RECOMENDATIONS</h1>
                        <div class="twitterItemContent"></div>
                        <div class="twitterItemContent">
                            Aliquam sed congue ipsum.
                        </div>
                        <div class="twitterItemContent">
                            In quis vestibulum purus.
                        </div>
                        <div class="twitterItemContent">
                            Donec lectus dui, cursus eu hendrerit non, condimentum vel tortor.
                        </div>
                        <div class="twitterItemContent">
                            Pellentesque ut nunc eleifend, varius est non, facilisis justo.
                        </div>
                        <div class="twitterItemContent">
                            Aenean vitae nunc in mi pulvinar egestas.
                        </div>
                    </div>
                    <div id="stickyId"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>