@extends('layout')

@section('content')

@php
    $user = auth()->user();
    $names = explode(' ', $user->name);
    $initials = strtoupper($names[0][0] . ($names[1][0] ?? ''));
@endphp

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="feed">

    <div class="compose">

        <div class="avatar-circle">
            {{ $initials }}
        </div>

        <form method="POST" action="/posts" class="compose-body">
            @csrf

            <textarea 
                name="content"
                class="compose-input" 
                placeholder="What is happening?!"
            ></textarea>

            <div class="compose-actions">

                <button type="submit" class="compose-button">
                    Post
                </button>

            </div>
        </form>

    </div>

    <!-- FEED -->
    @foreach($posts as $post)

        @php
            $names = explode(' ', $post->user->name);
            $initials = strtoupper($names[0][0] . ($names[1][0] ?? ''));
        @endphp

        <div class="post">

            <div class="avatar-circle small">
                {{ $initials }}
            </div>

            <div class="post-body">

                <div class="post-header">
                    <strong>{{ $post->user->name }}</strong>

                    <span>
                        · {{ $post->created_at->diffForHumans() }}
                    </span>

                    <!-- EDIT BUTTON -->
                    @if(auth()->id() === $post->user_id)
                        <a href="/posts/{{ $post->id }}/edit" class="edit-button">
                            Edit
                        </a>
                    @endif

                </div>

                <p class="post-content">
                    {{ $post->content }}
                </p>

            </div>

        </div>

    @endforeach

</div>

@endsection