@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        {{ $user->name }}'s Profile
    </div>
    <div class="card-body">
        <form action="{{ route('follow', $user) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">
                @if(auth()->user()->followings->contains($user))
                    Unfollow
                @else
                    Follow
                @endif
            </button>
        </form>
    </div>
</div>
<div class="card mt-4">
    <div class="card-header">
        Posts
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($user->posts as $post)
                <li class="list-group-item">{{ $post->content }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
