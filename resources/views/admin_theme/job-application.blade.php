@extends('admin_theme.layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Job Applications</h4>
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
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>CNIC Number</th>
                                <th>Permanent Address</th>
                                <th>Mailing Address</th>
                                <th>Employment Type</th>
                                <th>Position Applied For</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->full_name }}</td>
                                <td>{{ $application->phone_number }}</td>
                                <td>{{ $application->cnic_number }}</td>
                                <td>{{ Str::limit($application->permanent_address, 50) }}</td>
                                <td>{{ Str::limit($application->mailing_address, 50) }}</td>
                                <td>{{ $application->employment_type }}</td>
                                <td>{{ $application->position_applied }}</td>
                                <td>
                                    <a href="{{ route('application.show', $application) }}" class="btn btn-sm btn-info">View</a>
                                    <form method="POST" action="{{ route('application.destroy', $application->id) }}" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this application?')">Delete</button>
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
