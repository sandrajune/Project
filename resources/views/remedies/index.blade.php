@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Remedies
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($remedies as $remedy)
                <li class="list-group-item">{{ $remedy['name'] }}: {{ $remedy['description'] }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
