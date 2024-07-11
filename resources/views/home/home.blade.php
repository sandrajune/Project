@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Herbalists Forum</h1>
    
    <div class="row">
        <div class="col-md-6">
            <h2>Herbs</h2>
            <p>Discover various herbs and their benefits.</p>
            <a href="{{ url('herbs') }}" class="btn btn-primary">View Herbs</a>
        </div>
        <div class="col-md-6">
            <h2>Remedies</h2>
            <p>Explore different remedies for various ailments.</p>
            <a href="{{ url('remedies') }}" class="btn btn-primary">View Remedies</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Forum</h2>
            <p>Join the discussion in our forum.</p>
            <a href="{{ route('topics.index') }}" class="btn btn-primary">View Topics</a>
        </div>
    </div>
</div>
@endsection

