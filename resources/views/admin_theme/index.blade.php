@extends('admin_theme.layouts.master')
@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <h4 class="mb-5">Analytics Overview</h4>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">862k</h2>
                            <h5>Users</h5>
                            <small>10% Decrease last week</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">4.1M</h2>
                            <h5>Sessions</h5>
                            <small>24% Decrease last week</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">143k</h2>
                            <h5>Visit Duration</h5>
                            <small>10% change</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">32%</h2>
                            <h5>Bounce Rate</h5>
                            <small>10% change</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Audience Metrics</h4>
                            </div>
                            <div class="d-flex">
                                <div class="me-3">
                                    <p class="mb-0"><svg class="text-primary" width="10" height="10" viewBox="0 0 10 10"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Avg.Session</p>
                                </div>
                                <div class="me-3">
                                    <p class="mb-0"><svg class="text-secondary" width="10" height="10"
                                            viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Conversion Rate</p>
                                </div>
                                <div class="">
                                    <p class="mb-0"><svg class="text-tertiray" width="10" height="10"
                                            viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Avg. Session Durations</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-01" class="analytics-chart-01"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Live Users</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray" id="dropdownMenuButton34" data-bs-toggle="dropdown"
                                    aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton34"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-02" class="analytics-chart-02"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Sessions By Countries</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray" id="dropdownMenuButton30" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton30"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-03" class="analytics-chart-03"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection