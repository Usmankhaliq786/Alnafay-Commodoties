@extends('admin_theme.layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Blog Posts</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Post</a>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50) }}</td>
                    <td>{{ $post->category }}</td>
                    <td>
                        @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('blogs.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
