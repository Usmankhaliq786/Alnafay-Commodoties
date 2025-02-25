@extends('theme.layout.master')

@section('css')
    <style>
        .account-opening-page {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .account-opening-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .account-opening-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 30px;
            margin-bottom: 50px;
        }

        .account-step {
            background-color: #fff;
            padding: 30px 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .account-step:hover {
            transform: translateY(-10px);
        }

        .step-icon {
            margin-bottom: 20px;
        }

        .step-icon img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .step-description h4 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .step-description p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
        }

        .procedure-flow {
            padding: 50px 0;
            background-color: #fff;
        }

        .procedure-flow h3 {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 40px;
        }

        .procedure-flow ul {
            list-style-type: none;
            padding: 0;
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
        }
        .btn{
            color: blue;
        }

        .procedure-flow ul li {
            background: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            border-radius: 10px;
            position: relative;
            font-size: 16px;
        }

        .procedure-flow ul li::before {
            content: '\f058';
            font-family: 'FontAwesome';
            position: absolute;
            left: 20px;
            top: 20px;
            font-size: 18px;
            color: green;
        }

        .procedure-flow ul li span {
            font-weight: bold;
        }

        /* Responsive adjustments */
        @media only screen and (max-width: 768px) {
            .account-opening-title h2 {
                font-size: 2rem;
            }

            .step-icon img {
                width: 50px;
                height: 50px;
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
                            <li>Account Opening Procedure</li>
                        </ul>
                        <h1>Account Opening Procedure</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Account Opening Procedure Section -->
    <div class="account-opening-page">
        <div class="container">
            <div class="account-opening-title">
                <h2>How to Open a Trading Account with Al Nafay Commodities</h2>
                <p>Al Nafay Commodities provides a seamless and secure process for opening your commodity trading account.
                    Follow these steps to get started in the world of commodity trading with a reliable and regulated
                    partner.</p>
            </div>

            <!-- Detailed Paragraph before the cards -->
            <p style="text-align: center; font-size: 1.1rem; color: #666; line-height: 1.8; margin-bottom: 40px;">
                As a member of the Pakistan Mercantile Exchange (PMEX), Al Nafay Commodities ensures that all processes meet
                the highest standards of compliance and transparency. Our team is here to guide you through each step of the
                account opening procedure, ensuring that you meet all regulatory requirements, so you can focus on growing
                your investments.
            </p>

            <!-- Steps Grid -->
            <div class="steps-grid">
                <!-- Step 1 -->
                <div class="account-step">
                    <div class="step-icon">
                        <img src="{{ asset('assets/img/phone.png') }}" alt="Step 1">
                    </div>
                    <div class="step-description">
                        <h4>Step 1: Initial Consultation</h4>
                        <p>Contact us via phone or email to discuss your trading objectives. Our team will walk you through
                            the process, answer any questions, and ensure you understand all the documentation required for
                            the next steps.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="account-step">
                    <div class="step-icon">
                        <img src="{{ asset('assets/img/account-form.png') }}" alt="Step 2">
                    </div>
                    <div class="step-description">
                        <h4>Step 2: Submit Application Form</h4>
                        <p>Fill out the account opening form, providing essential details such as your CNIC, proof of
                            address, and KYC documents. Ensure all information is accurate to avoid delays during
                            verification.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="account-step">
                    <div class="step-icon">
                        <img src="{{ asset('assets/img/biometric.png') }}" alt="Step 3">
                    </div>
                    <div class="step-description">
                        <h4>Step 3: Biometric Verification</h4>
                        <p>Complete biometric verification at our office or authorized location. This ensures compliance
                            with Pakistan's regulatory standards and confirms your identity before trading can begin.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="account-step">
                    <div class="step-icon">
                        <img src="{{ asset('assets/img/form1.png') }}" alt="Step 4">
                    </div>
                    <div class="step-description">
                        <h4>Step 4: Receive Your Credentials</h4>
                        <p>Once your application and verification are approved, you'll receive your PMEX trading credentials
                            via email. These credentials give you access to our secure trading platform.</p>
                    </div>
                </div>
            </div>
            <div class="steps-grid">

                <!-- Step 1 -->
                <div class="account-step">
                    <h4>Deposit / Withdrawal Manual</h4>
                    <div class="step-icon" onClick="download('{{ asset('assets/pdf/add-heading.pdf') }}')">
                        <img src="{{ asset('assets/img/download_img.png') }}" alt="Step 1">
                    </div>
                    
                </div>
                <div class="account-step">
                    <h4>Commission Slab</h4>
                    <div class="step-icon" onClick="download('{{ asset('assets/pdf/letter-1 (1).pdf') }}')">
                        <img src="{{ asset('assets/img/download_img.png') }}" alt="Step 1">
                    </div>
            </div>

            <!-- Additional Paragraph between cards and list -->
            <p style="text-align: center; font-size: 1.1rem; color: #666; line-height: 1.8; margin-bottom: 40px;">
                Opening a trading account is the first step toward accessing the PMEX trading platform. This platform allows
                you to trade a wide range of commodities, from precious metals like gold to agricultural products like
                wheat. Once your account is active, you can begin trading securely, with full confidence in our compliant
                and transparent system.
            </p>
        </div>
    </div>
    
    

    <!-- Procedure Flow Section -->
    <div class="procedure-flow">
        <div class="container">
            <h3>Step-by-Step Account Opening Procedure</h3>
            <ul>
                <li><span>Step 1:</span> Fill out the standardized account opening form with the necessary personal and
                    financial details, including CNIC and KYC documents.</li>
                <li><span>Step 2:</span> Our team will review and approve the submitted documents after cross-verification.
          
            </li>
                <li><span>Step 3:</span> Complete biometric verification at our office or any authorized location.</li>
                <li><span>Step 4:</span> Upon successful verification, you'll receive an email from PMEX with login
                    credentials.</li>
                <li><span>Step 5:</span> Initiate the fund allocation request to deposit money into your PMEX account.</li>
                <li><span>Step 6:</span> Start trading commodities on the PMEX platform using your allocated funds.</li>
            </ul>
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

<script>
    function download(url) {
        console.log('line 296');
        const a = document.createElement('a')
        a.href = url
        a.download = url.split('/').pop()
        document.body.appendChild(a)
        a.click()
        document.body.removeChild(a)
    }
</script>