@extends('admin_theme.layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Contact Messages</h4>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ Str::limit($message->message, 50) }}</td>
                                <td>
                                    <a href="{{ route('message.show', $message) }}" class="btn btn-sm btn-info">View</a>
                                    <form method="POST" action="{{ route('message.destroy', $message->id) }}"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
