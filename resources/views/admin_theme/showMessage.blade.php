@extends('admin_theme.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-purple text-white">
                    <h3 class="card-title mb-0">Message Details</h3>
                </div>
                <div class="card-body p-5">
                    <div class="mb-4">
                        <label class="text-muted">From:</label>
                        <div class="pl-3">
                            <h5 class="font-weight-bold">{{ $message->name }}</h5>
                            <p class="text-muted">{{ $message->email }}</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-muted">Date:</label>
                        <p class="pl-3">{{ $message->created_at->format('F d, Y h:i A') }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="text-muted">Subject:</label>
                        <p class="pl-3">{{ $message->subject }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="text-muted">Message:</label>
                        <p class="pl-3">{{ $message->message }}</p>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('messages.recent') }}" class="btn btn-outline-secondary">Back to Messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .bg-purple {
        background-color: #6f42c1;
    }
    label {
        font-size: 1.1em;
    }
    .pl-3 {
        padding-left: 1rem;
    }
</style>
@endpush
