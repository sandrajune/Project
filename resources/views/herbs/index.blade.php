@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Herbs
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($herbs as $herb)
                <li class="list-group-item">{{ $herb['name'] }}: {{ $herb['description'] }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
