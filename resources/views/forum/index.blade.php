@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Forum
    </div>
    <div class="card-body">
        <a href="{{ route('forum.create') }}" class="btn btn-primary mb-3">Ask a Question</a>
        <ul class="list-group list-group-flush">
            @foreach ($questions as $question)
                <li class="list-group-item">
                    <a href="{{ route('forum.show', $question) }}">{{ $question->content }}</a>
                    <small>by {{ $question->user->name }}</small>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
