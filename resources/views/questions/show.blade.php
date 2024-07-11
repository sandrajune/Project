@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $question->title }}</h1>
    <p>{{ $question->content }}</p>

    <h2>Answers</h2>
    <form action="{{ route('answers.store', $question) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Answer</label>
            <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <ul class="list-group mt-3">
        @foreach ($answers as $answer)
            <li class="list-group-item">
                <p>{{ $answer->content }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection


