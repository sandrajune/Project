@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Topics</h1>
    <a href="{{ route('topics.create') }}" class="btn btn-primary">Create Topic</a>
    <ul class="list-group mt-3">
        @foreach ($topics as $topic)
            <li class="list-group-item">
                <a href="{{ route('topics.show', $topic) }}">{{ $topic->name }}</a>
                <p>{{ $topic->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
