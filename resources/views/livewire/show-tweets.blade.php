<div>
    @foreach($tweets as $tweet)

        {{ $tweet->user->name  }} - {{ $tweet->content }}

    @endforeach
</div>
