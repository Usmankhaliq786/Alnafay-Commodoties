@extends('admin_theme.layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{ $post->title }}</h1>
    @if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-4">
    @endif
    <p>{{ $post->content }}</p>
    <p><strong>Category:</strong> {{ $post->category }}</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary mt-3">Back to Blog Posts</a>
</div>
@endsection
