@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Remedies</h1>
    <ul class="list-group">
        @foreach ($remedies as $remedy)
            <li class="list-group-item">{{ $remedy['name'] }}</li>
        @endforeach
    </ul>
</div>
@endsection

