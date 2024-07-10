@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Search Results
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($results as $result)
                <li class="list-group-item">{{ $result['name'] }}: {{ $result['description'] }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
