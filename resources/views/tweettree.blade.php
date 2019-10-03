@if ($main->reply_of)
    @if (App\Models\Yap::find($main->reply_of))
        @include('tweet', ['reply' => App\Models\Yap::find($main->reply_of)])
    @endif
@elseif ($main->retweet_of)
    @if (App\Models\Yap::find($main->retweet_of))
        @include('retweet', ['retweet' => App\Models\Yap::find($main->retweet_of)])
    @endif
@else
    @include('tweet', ['main' => $main])
@endif