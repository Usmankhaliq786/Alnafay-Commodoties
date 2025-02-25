@extends('theme.layout.master')
@section('content')

<div class="banner__three" style="padding-top: 150px; padding-bottom:90px;" data-background="assets/img/shape/banner-bg-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <ul>
                        <li><a href="">Home</a><span>|</span></li>
                        <li>Career</li>
                    </ul>
                    <h1>Career</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Company Area Start -->
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-7 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/about-11.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <span class="subtitle-one">About Our Company</span>
                        <h2>Career With Us</h2>
                        <p>At Al Nafay Commodities (Pvt) Limited, your career is where the pulse of investment beats strongly, and the rhythm of success is part of every journey. We are seeking individuals who aspire to stand at the forefront of the financial landscape and thrive in the exciting world of futures trading.</p>
                        <p>As a member of PMEX, we are more than a company - we are a trusted partner on your career path. We offer innovative trading solutions and expert consultancy services, empowering our team with the knowledge and tools needed to excel and make informed decisions.</p>
                        <p>Join us and be part of a team of visionaries, strategists, and analysts who are driven to empower our clients and navigate the markets towards success. We invite you to explore the opportunities and chart your own course towards a rewarding career at Al Nafay.</p>
                        <button class="read-more-btn" data-bs-toggle="modal" data-bs-target="#jobDetailsModal">View Job Details</button>
                        <button class="read-more-btn" data-bs-toggle="modal" data-bs-target="#applyNowModal">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Job Details Modal -->
<div class="modal fade" id="jobDetailsModal" tabindex="-1" aria-labelledby="jobDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobDetailsModalLabel">Job Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2>Career With Us</h2>
                <p>At Al Nafay Commodities (Pvt) Limited, your career is where the pulse of investment beats strongly, and the rhythm of success is part of every journey. We are seeking individuals who aspire to stand at the forefront of the financial landscape and thrive in the exciting world of futures trading.</p>
                <p>As a member of PMEX, we are more than a company - we are a trusted partner on your career path. We offer innovative trading solutions and expert consultancy services, empowering our team with the knowledge and tools needed to excel and make informed decisions.</p>
                <p>Join us and be part of a team of visionaries, strategists, and analysts who are driven to empower our clients and navigate the markets towards success. We invite you to explore the opportunities and chart your own course towards a rewarding career at Al Nafay.</p>
            </div>
        </div>
    </div>
</div>

<!-- Apply Now Modal -->
<div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyNowModalLabel">Job Application Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="jobApplicationForm" method="POST" action="{{route('apply.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                            <div class="invalid-feedback">Full Name is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="phone_number" class="form-label">Phone Number (Mobile) <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
                            <div class="invalid-feedback">Phone Number is required.</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="cnic_number" class="form-label">CNIC Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cnic_number" name="cnic_number" required>
                            <div class="invalid-feedback">CNIC Number is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="ntn_number" class="form-label">NTN Number</label>
                            <input type="text" class="form-control" id="ntn_number" name="ntn_number">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="blood_group" class="form-label">Blood Group</label>
                        <input type="text" class="form-control" id="blood_group" name="blood_group">
                    </div>

                    <div class="mb-3">
                        <label for="permanent_address" class="form-label">Permanent Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="permanent_address" name="permanent_address" required>
                        <div class="invalid-feedback">Permanent Address is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for="mailing_address" class="form-label">Mailing Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="mailing_address" name="mailing_address" required>
                        <div class="invalid-feedback">Mailing Address is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for="facebook_profile" class="form-label">Facebook Profile</label>
                        <input type="url" class="form-control" id="facebook_profile" name="facebook_profile">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="employment_type" class="form-label">Employment Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="employment_type" name="employment_type" required>
                                    <option value="" selected>Select employment type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                                <div class="invalid-feedback">Employment Type is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="position_applied" class="form-label">Position Applied For <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="position_applied" name="position_applied" required>
                                <div class="invalid-feedback">Position Applied For is required.</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Level" name="education_level[]" aria-label="Educational level">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Institute Name" name="education_institute[]" aria-label="Institute name">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Location" name="education_location[]" aria-label="Location of institute">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Recent Passport Photo <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                        <div class="invalid-feedback">Recent Passport Photo is required.</div>
                    </div>

                    <div class="mt-4 d-flex justify-content-end">
                        <button type="submit" class="btn-seven">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@if(session('success'))
<script type="text/javascript">
    $(document).ready(function() {
        Swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Okay'
        });
    });
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Form validation
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        event.preventDefault()
                        form.submit();
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection
