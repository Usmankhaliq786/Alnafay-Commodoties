@extends('theme.layout.master')

@section('css')
    <style>
        .responsive-image {
            width: 90%;
            height: auto;
        }

        @media only screen and (max-width: 768px) {
            .responsive-image {
                width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="banner__three" style="padding-top: 150px; padding-bottom:90px;"
        data-background="assets/img/shape/banner-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a><span>|</span></li>
                            <li>Do's and Don'ts</li>
                        </ul>
                        <h1>Do's and Don'ts</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Do's Section Start -->
    <div class="about__company section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6">
                    <div class="about__company-right">
                        <div class="about__company-right-title">
                            <h5 class="mb-5">Do's of Commodity Trading</h5>
                            <ul>
                                <li><span>Verify the authenticity:</span> Always ensure the broker is registered with PMEX
                                    by visiting the official website.</li>
                                <li><span>Understand all terms:</span> Read and comprehend the Risk Disclosure Document
                                    before trading.</li>
                                <li><span>Fill out forms accurately:</span> Ensure all information in the Account Opening
                                    Form is correct and matches supporting documents.</li>
                                <li><span>Notify changes:</span> If your personal information changes, inform your broker
                                    immediately to prevent issues.</li>
                                <li><span>Use authorized payment methods:</span> Always make payments through authorized
                                    bank transfers directly to PMEX accounts.</li>
                                <li><span>Monitor your account:</span> Regularly check your trading statements, account
                                    balance, and transactions to ensure there are no errors.</li>
                                <li><span>Set up alerts:</span> Ensure all your transactions are accompanied by SMS or email
                                    alerts.</li>
                                <li><span>Report any suspicious activity:</span> Promptly report suspicious activity to your
                                    broker or PMEX for investigation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 xl-mb-30">
                    <div class="about__company-left">
                        <div class="about__company-left-image dark__image">
                            <img src="{{ asset('assets/img/do.jpg') }}" alt="Do's Image"
                                class="responsive-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Don'ts Section Start -->
    <div class="company__two section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="company__two-right dark__image t-right">
                        <img class="img__full" src="{{ asset('assets/img/donts.jpg') }}" alt="Don'ts Image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 lg-mb-30">
                    <div class="about__company-right">
                        <div class="about__company-right-title">
                            <h5 class="mb-5">Don'ts of Commodity Trading</h5>
                            <ul>
                                <li><span>Don't deal with unregistered brokers:</span> Avoid trading with brokers or
                                    branches not registered with PMEX.</li>
                                <li><span>Don't provide incomplete information:</span> Fill out all fields in your Account
                                    Opening Form accurately to avoid delays.</li>
                                <li><span>Don't issue cash or postdated cheques:</span> Avoid cash payments, demand drafts,
                                    or postdated cheques not linked to a PMEX account.</li>
                                <li><span>Don't transfer money via third parties:</span> Always transfer funds directly from
                                    your account to PMEX without third-party involvement.</li>
                                <li><span>Don't fall for high-return promises:</span> Be cautious of promises of high
                                    returns, as these are not allowed under PMEX rules.</li>
                                <li><span>Don't keep funds in inactive accounts:</span> Ensure funds are used actively in
                                    trading, as inactive funds may incur penalties.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section Start -->
    <div class="footer__two all-footer" data-background="assets/img/shape/footer-bg-1.png">
        <!-- Subscribe Area Start -->
        <div class="subscribe__area">
            <div class="container">
                <div class="row align-items-center subscribe__area-bg all-page"
                    data-background="assets/img/pages/subscribe.jpg">
                    <div class="col-xl-5 col-lg-5 lg-mb-40">
                        <div class="subscribe__area-left">
                            <h2>Stay Connected</h2>
                            <div class="subscribe__area-left-notification">
                                <h6>Get all notifications</h6>
                                <div class="subscribe__area-left-notification-icon all-page icon-animation video-pulse">
                                    <i class="far fa-bell"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="subscribe__area-form all-page">
                            <form>
                                <input type="email" name="email" placeholder="Email address">
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
@endsection
