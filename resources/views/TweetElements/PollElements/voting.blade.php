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
</form>