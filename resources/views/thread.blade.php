@include('tweettwo')
@foreach ($thread->replies as $reply)
    @include('tweettree', ['main' => $reply])
@endforeach