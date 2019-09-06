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
    <div class="leftMain">
        <div class="leftPlaceholder">
            <div class="leftContentHolder">
                <nav class="leftMainContent">
                    <a href="/home">
                        <div>
                            <div>
                                <svg viewBox="0 0 24 24" src=""></svg>
                            </div>
                            <div>
                                <span>Home</span>
                            </div>
                        </div>
                    </a>
                </nav>
                <p>Hey, {{ Auth::user()->name }}</p>
            </div>
        </div>
    </div>
    <div class="main">
        @yield('content')
    </div>
    <div class="feedRight">
        <div class="homesearch">
            <form action="search" method="GET">
                <input type="text" class="searchBar" name="keyword" autocomplete="off">
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
</body>
</html>