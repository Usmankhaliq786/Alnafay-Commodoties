@extends('admin_theme.layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Blog Post</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form id="blogForm" action="{{ route('blogs.update', $post->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            <div class="invalid-feedback">Title is required.</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control d-none" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            <div id="editorContainer"></div>
            <div class="invalid-feedback">Content is required.</div>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $post->category }}" required>
            <div class="invalid-feedback">Category is required.</div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@section('scripts')
<!-- Include CKEditor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#editorContainer'))
            .then(editor => {
                window.editor = editor;
                editor.setData(document.querySelector('#content').value);
                document.querySelector('#blogForm').addEventListener('submit', function(event) {
                    const content = editor.getData();
                    document.querySelector('#content').value = content;

                    if (!this.checkValidity() || !content.trim()) {
                        event.preventDefault();
                        event.stopPropagation();
                        if (!content.trim()) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Content is required.',
                                confirmButtonText: 'OK'
                            });
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Your blog post has been successfully updated!',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            this.submit();
                        });
                    }
                    this.classList.add('was-validated');
                });
            })
            .catch(error => {
                console.error(error);
            });
    });

    document.getElementById('blogForm').addEventListener('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please fill out all required fields.',
                confirmButtonText: 'OK'
            });
        }
        this.classList.add('was-validated');
    });
</script>
@endsection
