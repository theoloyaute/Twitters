@extends('layouts.app')

@section('content')
<h1 style="margin-top: 2.5em;">Liste</h1>
    <div style="margin-bottom: 10em;">

    @foreach($tweets as $tweet)
        @if(!$tweet->tweet_id)
        <main class="px-3 div-content">
            <p class="text-start pseudo">{{ $tweet->user->name }}</p>
            <div class="b-example-divider message">
                <p class="lead">{{ $tweet->message }}</p>
            </div>

            @foreach ($tweet->childs($tweet->id) as $child)
                <p class="text-start pseudo">{{ $child->user->name }}</p>
                <div class="b-example-divider message_Id">
                    <p class="lead">{{ $child->message }}</p>
                </div>
                <div class="d-flex message_Id2 justify-content-around">
                    <form action="{{ route('tweets.edit', ['id' => $child->id]) }}" method="GET">
                        @csrf

                        <button type="submit">Mettre à jour</button>
                    </form>
                    <form action="{{ route('tweets.delete', ['id' => $child->id]) }}" method="POST">
                        @csrf

                        @method('DELETE')

                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            @endforeach
            <div class="d-flex justify-content-between">
                <form action="{{ route('tweets.reply', ['id' => $tweet->id]) }}" method="GET">
                    @csrf

                    <button type="submit" class="b-example-divider">Répondre</button>
                    <textarea name="message" id="message" class="b-example-divider message"></textarea>
                </form>
                <form action="{{ route('tweets.edit', ['id' => $tweet->id]) }}" method="GET">
                    @csrf

                    <button type="submit">Mettre à jour</button>
                </form>
                <form action="{{ route('tweets.delete', ['id' => $tweet->id]) }}" method="POST">
                    @csrf

                    @method('DELETE')

                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </main>
        @endif
    @endforeach

    </div>

@endsection