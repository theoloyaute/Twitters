@extends('layouts.app')

@section('content')
<h1>Liste</h1>
    <div style="margin-bottom: 10em;">

    @foreach($tweets as $tweet)
        <main class="px-3" style="margin-bottom: 0.5em;">
            <p class="text-start pseudo">pseudo</p>
            <div class="b-example-divider message">
                <p class="lead">{{ $tweet->message }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <span class="like">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/></svg>
                    </span>
                    <div class="nombre">1</div>
                </div>
                <span class="heure">heure</span>
            </div>
        </main>
    @endforeach

    </div>

@endsection