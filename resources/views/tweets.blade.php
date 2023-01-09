@extends('layouts.app')

@section('content')
<h1 style="margin-top: 2.5em;">Liste</h1>
    <div style="margin-bottom: 10em;">

    @foreach($tweets as $tweet)
        <main class="px-3 div-content">
            <p class="text-start pseudo">{{ $tweet->user->name }}</p>
            <div class="b-example-divider message">
                <p class="lead">{{ $tweet->message }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <form action="{{ route('tweets.delete', ['id' => $tweet->id]) }}" method="POST">
                @csrf

                @method('DELETE')

                <button type="submit">Supprimer</button>

                </form>
            </div>
        </main>
    @endforeach

    </div>

@endsection