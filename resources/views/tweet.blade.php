@extends('layouts.app')

@section('content')
<form action="{{ route('tweets.update', ['id' => $tweet->id]) }}" method="POST" style="margin-top: 5.5em;">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <textarea name="message" cols="30" rows="10" class="b-example-divider message">{{ $tweet->message }}</textarea>
    <button type="submit">Valider</button>
</form>
@endsection