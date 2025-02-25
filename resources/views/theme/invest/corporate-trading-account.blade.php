@extends('theme.layout.master')

@section('css')
    <style>
        .account-page {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .account-section {
            margin-bottom: 60px;
        }

        .account-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .account-section h4 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .account-section p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 10px;
            line-height: 1.8;
        }

        .account-section img {
            max-width: 100%;
            height: auto;
        }

        .account-section .account-cta {
            margin-top: 20px;
            text-align: center;
        }

        .account-section .cta-button {
            background-color: #ff6600;
            color: #fff;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 10px;
        }

        .account-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .account-content .left,
        .account-content .right {
            width: 48%;
        }

        .account-content .left {
            padding-right: 30px;
        }

        .account-content .right img {
            border-radius: 8px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .account-content {
                flex-direction: column;
            }

            .account-content .left,
            .account-content .right {
                width: 100%;
                padding: 0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="banner__three" style="padding-top: 150px; padding-bottom:90px;" data-background="assets/img/shape/banner-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a><span>|</span></li>
                            <li>Corporate Account</li>
                        </ul>
                        <h1>Corporate Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Corporate Account Section Start -->
    <div class="account-page">
        <div class="container">
            <div class="account-section">
                <div class="account-content">
                    <div class="left">
                        <h4>Corporate Account</h4>
                        <p>This type of account is for businesses where trading is a significant part of the operation. It can be ideal for corporate entities looking to make a business out of trading in commodities.</p>

                        <h4>How to Open a Corporate Trading Account</h4>
                        <p><strong>Step 1:</strong> The customer will log in to the platform using their email and receive a One-Time Password (OTP) to verify the setup of their account. The customer will also need to create a User ID and password for future access.</p>
                        <p><strong>Step 2:</strong> Once the account is registered with PMEX, the customer will be guided to the dashboard where they will fill out the corporate account opening form, providing all necessary business information, including the Terms & Conditions, Risk Disclosure documents, and any other supporting documents.</p>
                        <p><strong>Step 3:</strong> The customer submits the form for review and approval.</p>
                        <p><strong>Step 4:</strong> NCDPL will verify the customer’s documents and send a One-Time Password (OTP) via SMS to the customer.</p>
                        <p><strong>Step 5:</strong> Upon successful verification, customers will be granted access to their PMEX account, receiving their trading credentials via email along with MT5 trading platform access.</p>
                        <p><strong>Step 6:</strong> Once all processes are complete, the customer can begin trading with PMEX, leveraging the corporate account for active trading.</p>

                        <div class="account-cta">
                            {{-- <a href="#" class="cta-button">Click to Open a Corporate Account Online</a> --}}
                        </div>
                    </div>

                    <div class="right">
                        <img src="{{asset('assets/img/corporate.jpg')}}" alt="Corporate Account">
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
