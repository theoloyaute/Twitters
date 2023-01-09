@extends('layouts.app')

@section('content')
<form action="POST" action="{{ route('tweets.update') }}">
    <h3>{{ $tweet->title }}</h3>
    <textarea name="message" cols="30" rows="10">{{ $tweet->message }}</textarea>
    <button type="submit"></button>
</form>
@endsection