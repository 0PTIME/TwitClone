<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color:transparent;">
    <div class="mainPollResultsDisplay">
        <div class="graphBar {{ $tweet->poll->pollData()['winner'] == 'option_one' ? 'winner' : '' }}" id="tweet{{ $tweet->id }}graph_one" style="width: {{ $tweet->poll->pollData()['option_one'] }}%;">
            <p class="pollTextOption">{{ $tweet->poll->option_one }}</p>
            @if ($tweet->poll->voted() == 1)
                <svg width="20px" height="20px" class="pollsvg">
                    <circle cx="10" cy="10" r="5"/>
                </svg>
            @endif
        </div>
        <div class="graphBar {{ $tweet->poll->pollData()['winner'] == 'option_two' ? 'winner' : '' }}" id="tweet{{ $tweet->id }}graph_two" style="width: {{ $tweet->poll->pollData()['option_two'] }}%;">
            <p class="pollTextOption">{{ $tweet->poll->option_two }}</p>
            @if ($tweet->poll->voted() == 2)
                <svg width="20px" height="20px" class="pollsvg">
                    <circle cx="10" cy="10" r="5"/>
                </svg>
            @endif
        </div>
        @if ($tweet->poll->option_three)
            <div class="graphBar {{ $tweet->poll->pollData()['winner'] == 'option_three' ? 'winner' : '' }}" id="tweet{{ $tweet->id }}graph_three" style="width: {{ $tweet->poll->pollData()['option_three'] }}%;">
                <p class="pollTextOption">{{ $tweet->poll->option_three }}</p>
                @if ($tweet->poll->voted() == 3)
                    <svg width="20px" height="20px" class="pollsvg">
                        <circle cx="10" cy="10" r="5"/>
                    </svg>
                @endif
            </div>
        @endif
        @if ($tweet->poll->option_four)
            <div class="graphBar {{ $tweet->poll->pollData()['winner'] == 'option_four' ? 'winner' : '' }}" id="tweet{{ $tweet->id }}graph_four" style="width: {{ $tweet->poll->pollData()['option_four'] }}%;">
                <p class="pollTextOption">{{ $tweet->poll->option_four }}</p>
                @if ($tweet->poll->voted() == 4)
                    <svg width="20px" height="20px" class="pollsvg">
                        <circle cx="10" cy="10" r="5"/>
                    </svg>
                @endif
            </div>
        @endif
    </div>
    <div class="leftPollResultsDisplay">
        <div class="percent" id="tweet{{ $tweet->id }}graph_one">
            <p>{{ $tweet->poll->pollData()['option_one'] }}%</p>
        </div>
        <div class="percent" id="tweet{{ $tweet->id }}graph_two">
            <p>{{ $tweet->poll->pollData()['option_two'] }}%</p>
        </div>
        @if ($tweet->poll->option_three)
            <div class="percent" id="tweet{{ $tweet->id }}graph_three">
                <p>{{ $tweet->poll->pollData()['option_three'] }}%</p>
            </div>
        @endif
        @if ($tweet->poll->option_four)
            <div class="percent" id="tweet{{ $tweet->id }}graph_four">
                <p>{{ $tweet->poll->pollData()['option_four'] }}%</p>                
            </div>
        @endif
    </div>
    <div class="bottomPoll">
        @if ($tweet->poll->submissions !== null)
            <p style="display: inline;">{{ $tweet->poll->submissions->count() }} People Voted</p>
        @endif
        <span style="display: inline;"> · {{ $tweet->poll->expiration_date }}</span> {{-- strtotime()->diffForHumans(null, true, true) --}}
    </div> 
</body>
</html>