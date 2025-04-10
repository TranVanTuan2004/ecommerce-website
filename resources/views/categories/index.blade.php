@extends('layouts.app')

@section('content')
<h2 class="mb-4">All Categories</h2>
<div class="d-flex flex-wrap gap-3">
    @foreach($categories as $category)
    <div class="card p-3">
        <h5>{{ $category->name }}</h5>
        <p>{{ $category->description }}</p>
    </div>
    @endforeach
</div>
@endsection