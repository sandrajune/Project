@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $topic->name }}</h1>
    <p>{{ $topic->description }}</p>

    <h2>Questions</h2>
    <a href="{{ route('questions.create', $topic) }}" class="btn btn-primary">Create Question</a>
    <ul class="list-group mt-3">
        @foreach ($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('questions.show', $question) }}">{{ $question->title }}</a>
                <p>{{ $question->content }}</p>
            </li>
        @endforeach
    </ul>

    <h2>Posts</h2>
    <a href="{{ route('posts.create', $topic) }}" class="btn btn-primary">Create Post</a>
    <ul class="list-group mt-3">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <p>{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
