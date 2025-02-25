@extends('admin_theme.layouts.master')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Job Application Details</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $application->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $application->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>CNIC Number</th>
                            <td>{{ $application->cnic_number }}</td>
                        </tr>
                        <tr>
                            <th>NTN Number</th>
                            <td>{{ $application->ntn_number ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td>{{ $application->blood_group ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <td>{{ $application->permanent_address }}</td>
                        </tr>
                        <tr>
                            <th>Mailing Address</th>
                            <td>{{ $application->mailing_address }}</td>
                        </tr>
                        <tr>
                            <th>Facebook Profile</th>
                            <td>{{ $application->facebook_profile ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th>Employment Type</th>
                            <td>{{ $application->employment_type }}</td>
                        </tr>
                        <tr>
                            <th>Position Applied For</th>
                            <td>{{ $application->position_applied }}</td>
                        </tr>
                        <tr>
                            <th>Education</th>
                            <td>
                                @if ($application->education)
                                    <ul>
                                        @foreach ($application->education as $education)
                                            <li>{{ $education['level'] }} - {{ $education['institute'] }} ({{ $education['location'] }})</li>
                                        @endforeach
                                    </ul>
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Recent Passport Photo</th>
                            <td>
                                <img src="{{ asset('storage/' . $application->photo) }}" alt="Passport Photo" width="150">
                            </td>
                        </tr>
                    </table>
                    <a href="{{ route('career.index') }}" class="btn btn-secondary mt-3">Back to Applications</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
