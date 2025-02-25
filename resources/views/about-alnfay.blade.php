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
                        <li><a href="">Home</a><span>|</span></li>
                        <li>About Alnafay</li>
                    </ul>
                    <h1>About Alnafay</h1>
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
                        <h2>Al Nafay Commodities</h2>
                        <p>Al Nafay commodities (Pvt) limited where the pulse of investment beats strongly and the
                            rhythm of success reverberates through every endeavor. We pride ourselves on being at the
                            forefront of the financial landscape, guiding our clients toward prosperity in the exciting
                            world of futures trading. As a distinguished member of PMEX (Pakistan Mercantile Exchange),
                            we bring modern trading facilities to market enthusiasts, facilitating seamless transactions
                            in futures contracts.</p>
                        <p>Al Nafay is not just a company; it is a trusted partner in your financial journey. As a
                            member of PMEX, we stand as a beacon of reliability, offering innovative trading solutions
                            and expert consultancy services. Our commitment is to empower you with the knowledge and
                            tools needed to make informed decisions and unlock the full potential of your investments
                        </p>
                        <p>our narrative is not just about numbers, graphs, and charts. It is about the people behind
                            the scenes, the minds that drive our business forward. Our team comprises visionaries,
                            strategists, and analysts who share a singular purpose. To empower our clients, to guide
                            them through the ebbs and flows of the market, and to lead them towards the zenith of
                            success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="company__two section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 lg-mb-30">
                <div class="company__two-left">
                    <div class="company__two-left-title">
                        <span class="subtitle-one">Who we are</span>
                        <h2>Investing with Excellence</h2>
                        <p>Al Nafay commodities, we do not settle for the ordinary; we embrace the extraordinary. Our
                            commitment to excellence is steadfast, our dedication to our clients unwavering, and our
                            resolve unyielding. We do not just make investments; we forge partnerships, we cultivate
                            growth, and we kindle the flames of prosperity.</p>
                        <p>
                            So, whether you are an astute investor seeking new horizons, a budding entrepreneur charting
                            your course, or an individual with a thirst for financial wisdom, Al Nafay Commodities
                            welcomes you to a world where investment transcends mere transactions and evolves into a
                            legacy of empowerment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="company__two-right dark__image t-right">
                    <img class="img__full" src="{{asset('assets/img/about/about-12.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="company__two section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-5">
                <div class="company__two-right dark__image t-left">
                    <img class="responsive-image img__full" src="{{asset('assets/img/about/vision.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 lg-mb-30">
                <div class="company__two-right">
                    <div class="company__two-right-title">
                        <span class="subtitle-one">Our Vision</span>
                        <h2>Investing Beyond Boundaries</h2>
                        <p>Al Nafay commodities, we do not settle for the ordinary; we embrace the extraordinary. Our
                            commitment to excellence is steadfast, our dedication to our clients unwavering, and our
                            resolve unyielding. We do not just make investments; we forge partnerships, we cultivate
                            growth, and we kindle the flames of prosperity.</p>
                        <p>
                            So, whether you are an astute investor seeking new horizons, a budding entrepreneur charting
                            your course, or an individual with a thirst for financial wisdom, Al Nafay Commodities
                            welcomes you to a world where investment transcends mere transactions and evolves into a
                            legacy of empowerment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="company__two section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 lg-mb-30">
                <div class="company__two-left">
                    <div class="company__two-left-title">
                        <span class="subtitle-one">Our Mission</span>
                        <h2>Investment Excellence</h2>
                        <p>Al Nafay Commodities is committed to redefining the landscape of investment by breaking
                            boundaries and unleashing the true potential of commodities, energies, and currencies. Our
                            quest for excellence is driven by innovation and the steadfast pursuit of it. We aim to
                            provide unmatched value in every trade, transaction, and venture, delivering success and
                            prosperity to all our stakeholders. We aspire to be the partner of choice for those seeking
                            strategic investment solutions, innovative trading technologies, and expert market insights.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="company__two-right dark__image t-right">
                    <img class="img__full" src="{{asset('assets/img/about/mission.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__solution" data-background="{{asset('assets/img/about/about-solution.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8">
                <div class="about__solution-left xl-t-center">
                    <h2>implement solutions & achieve goals.</h2>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="about__solution-right t-right xl-t-center">
                    <a class="btn-one" href="contact.html">Get Free Consultations<i
                            class="far fa-chevron-double-right"></i></a>
                    <img class="about__solution-right-shape left-right-animate"
                        src="assets/img/shape/about-solution.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Solution Area End -->
<!-- Company History Area Start-->
<div class="company__history section-padding">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-12">
                <div class="company__history-title t-center">
                    <span class="subtitle-one">Al Nafay Commodities</span>
                    <h2>Why Choose Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="company__history-area dark__image">
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <img src="{{asset('assets/img/about/h11.jpg')}}" alt="">
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <span></span>
                                    <h5>Expert Guidance</h5>
                                </div>
                                <p>Our seasoned professionals are dedicated to providing personalized guidance, ensuring
                                    that you navigate the complexities of futures trading with confidence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span></span>
                                    <h5>Modern Trading Facilities</h5>
                                </div>
                                <p>As a proud member of PMEX, al Nafey brings you state-of-the-art trading facilities,
                                    ensuring a seamless and efficient trading experience.</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{asset('assets/img/about/h2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{asset('assets/img/about/h4.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content mb-50 xl-mb-30">
                                <div class="company__history-area-item-right-content-date">
                                    <h5>Diverse Investment Opportunities</h5>
                                </div>
                                <p>From metals and energies to commodities, al Nafey offers a diverse range of
                                    investment options, allowing you to tailor your portfolio to your unique financial
                                    goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-items">
                        <div class="company__history-area-items-left order-last order-lg-first">
                            <div class="company__history-area-items-left-content mb-50 xl-mb-30">
                                <div class="company__history-area-items-left-content-date">
                                    <span></span>
                                    <h5>Client-Centric Approach</h5>
                                </div>
                                <p>Your success is our priority. We take a client-centric approach, understanding your
                                    needs and crafting strategies that align with your aspirations.</p>
                            </div>
                        </div>
                        <div class="company__history-area-items-right">
                            <div class="company__history-area-items-right-image">
                                <img src="{{asset('assets/img/about/h5.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="company__history-area-item">
                        <div class="company__history-area-item-left">
                            <div class="company__history-area-item-left-image">
                                <img src="{{asset('assets/img/about/h6.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="company__history-area-item-right">
                            <div class="company__history-area-item-right-content">
                                <div class="company__history-area-item-right-content-date">
                                    <span></span>
                                    <h5>Innovative Market Strategies</h5>
                                </div>
                                <p>Al Nafay Commodities has pioneered groundbreaking market strategies this year,
                                    revolutionizing how investments are managed, and setting new benchmarks for industry
                                    excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="company__two section-padding pt-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="company__two-center dark__image t-center">
                                    <img class="img__full" src="{{asset('assets/img/about/certi.jpeg')}}" style="transform: rotate(-90deg); width:50%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <h6>get all notifications</h6>
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