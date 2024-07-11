@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Herbs</h1>
    <ul class="list-group">
        @foreach ($herbs as $herb)
            <li class="list-group-item">{{ $herb['name'] }}</li>
        @endforeach
    </ul>
</div>
@endsection

