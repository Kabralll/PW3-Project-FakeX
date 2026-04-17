@extends('layout')

@section('content')

<div class="compose">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')

        <textarea name="content" class="compose-input">
            {{ $post->content }}
        </textarea>

        <button class="compose-button">
            Update
        </button>

    </form>

</div>

@endsection