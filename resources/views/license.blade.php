@extends('theme.layout.master')
@section('css')
<style>
    /* Improved responsiveness for images */
    .responsive-image {
        width: 100%;
        height: auto;
        display: block; /* Ensures image scales properly */
    }

    /* Card container styling */
    .card-container {
        margin-top: 30px;
        margin-bottom: 50px;
    }

    /* Card specific styles */
    .card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden; /* Prevent content overflow */
    }

    /* Hover effect */
    .card:hover {
        transform: scale(1.03);
    }

    /* Card content alignment */
    .card-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #333; /* Improve readability */
    }

    .card-text {
        flex-grow: 1;
        color: #666; /* Secondary color for text */
        margin-bottom: 20px;
    }

    /* Responsive styling for smaller devices */
    @media only screen and (max-width: 768px) {
        .card-container {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .card-title {
            font-size: 1.25rem;
        }
    }

    /* Button focus state for accessibility */
    button:focus {
        outline: 2px solid #333;
        outline-offset: 2px;
    }
</style>
@endsection

@section('content')

<!-- Banner Section Start -->
<div class="banner__three" style="padding-top: 150px; padding-bottom: 90px;" data-background="assets/img/shape/banner-bg-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content text-center">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>License</li>
                    </ul>
                    <h1>License</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- License Section Start -->
<div class="container card-container">
    <div class="row">

        <!-- Card 1: SECP Licensing -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <img class="responsive-image rounded-top" loading="lazy" src="{{ asset('assets/img/about/license_1.jpg') }}" alt="SECP Licensing">
                <div class="card-body">
                    <h5 class="card-title">SECP Licensing and Registration</h5>
                    <p class="card-text">
                        Al Nafay Pvt Ltd is a legally registered company under the Licensing and Registration Division of the Securities and Exchange Commission of Pakistan (SECP). We comply with SECP regulations, ensuring transparency and adherence to corporate laws, which reinforces trust in our business practices.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: PMEX Registration -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <img class="responsive-image rounded-top" loading="lazy" src="{{ asset('assets/img/about/license_2.jpg') }}" alt="PMEX Registration">
                <div class="card-body">
                    <h5 class="card-title">PMEX Registration</h5>
                    <p class="card-text">
                        Al Nafay Commodities (Pvt.) Ltd. is a corporate member of Pakistan Mercantile Exchange (PMEX). Established in 2015, it provides clients with regulated commodities trading services, licensed by SECP with BRC-383, and registered in PMEX with TREC-090.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- License Section End -->

<!-- Footer Section Start -->
<div class="footer__two all-footer" data-background="assets/img/shape/footer-bg-1.png">
    <div class="subscribe__area">
        <div class="container">
            <div class="row align-items-center subscribe__area-bg" data-background="assets/img/pages/subscribe.jpg">
                <div class="col-xl-5 col-lg-5 lg-mb-40">
                    <div class="subscribe__area-left">
                        <h2>Stay Connected</h2>
                        <div class="subscribe__area-left-notification">
                            <h6>Get all notifications</h6>
                            <div class="subscribe__area-left-notification-icon video-pulse">
                                <i class="far fa-bell"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7">
                    <div class="subscribe__area-form">
                        <form>
                            <input type="email" name="email" placeholder="Email address" required>
                            <button type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->

@endsection
