@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Ask a Question
    </div>
    <div class="card-body">
        <form action="{{ route('forum.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="content">Question</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

