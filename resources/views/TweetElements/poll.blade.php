@if ($tweet->poll->expired() || $tweet->user_id === auth()->user()->id || $tweet->poll->voted())
    @include('TweetElements.PollElements.results')
    {{-- <iframe class="iframeDisplay" src="{{ route('displaypoll.results', ['id' => $tweet->id])}}" frameborder="0" style="height: {{ ($tweet->poll->numOpt() * 40) + 17 }}px"></iframe>                                   --}}
@else
    @include('TweetElements.PollElements.voting')
@endif