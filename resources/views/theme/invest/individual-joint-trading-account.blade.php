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
                            <li>Account Types</li>
                        </ul>
                        <h1>Individual & Joint Accounts</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Individual Account Section Start -->
    <div class="account-page">
        <div class="container">
            <div class="account-section">
                <div class="account-content">
                    <div class="left">
                        <h4>Individual Account</h4>
                        <p>This account type allows you to open a trading account where you make independent trading decisions and take full control of your portfolio. Suitable for individual investors looking to trade futures in commodities.</p>

                        <h4>How to Open an Individual Trading Account</h4>
                        <p><strong>Step 1:</strong> The customer logs in using their email and receives a One-Time Password (OTP) to verify the account setup.</p>
                        <p><strong>Step 2:</strong> After verification, customers are redirected to the account form where they enter their personal information and supporting documents like CNIC and KYC details.</p>
                        <p><strong>Step 3:</strong> Submit the completed form for approval.</p>
                        <p><strong>Step 4:</strong> NCDPL will verify the One-Time Password (OTP) and send a confirmation to the customer within 48 hours.</p>
                        <p><strong>Step 5:</strong> Once verification is complete, customers will receive credentials to log in to the PMEX trading platform.</p>
                        <p><strong>Step 6:</strong> Start trading after successfully logging into PMEX. The customer can also download the trading software for enhanced features.</p>
                    </div>

                    <div class="right">
                        <img src="{{asset('assets/img/joint.jpg')}}" alt="Individual Account">
                    </div>
                </div>
            </div>

            <!-- Joint Account Section Start -->
            <div class="account-section">
                <div class="account-content">
                    <div class="left">
                        <h4>Joint Account</h4>
                        <p>A joint trading account allows two or more individuals to share a single trading account. This account type is suitable for family members, business partners, or groups that wish to share responsibilities and trading decisions.</p>

                        <h4>How to Open a Joint Trading Account</h4>
                        <p><strong>Step 1:</strong> Similar to an individual account, customers log in with their email and verify using an OTP sent to their registered email or phone number.</p>
                        <p><strong>Step 2:</strong> Each account holder must fill out their individual information, including personal details and supporting documents like CNIC and KYC details.</p>
                        <p><strong>Step 3:</strong> The completed forms from all joint account holders are submitted for review and approval.</p>
                        <p><strong>Step 4:</strong> NCDPL will verify the provided information and OTP for all joint holders and notify them within 48 hours.</p>
                        <p><strong>Step 5:</strong> After verification, all account holders will receive credentials to access the joint PMEX trading platform.</p>
                        <p><strong>Step 6:</strong> Joint account holders can now begin trading on PMEX. Both parties share equal control over the trading account.</p>
                    </div>

                    <div class="right">
                        <img src="{{asset('assets/img/ind.jpg')}}" alt="Joint Account">
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
