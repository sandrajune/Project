@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Questions</h1>
    <a href="{{ route('questions.create') }}" class="btn btn-primary">Create Question</a>
    <ul class="list-group mt-3">
        @foreach ($questions as $question)
            <li class="list-group-item">
                <a href="{{ route('questions.show', $question) }}">{{ $question->title }}</a>
                <p>Asked by: {{ $question->herbalist->name }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection

