@extends('theme.layout.master')
@section('content')

<!-- Banner Area Start -->
<div class="banner__three" style="background-image: url('assets/img/shape/banner-bg-3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 mb-4">
                <div class="banner__three-title">
                    <span>Empowering Your Prosperity</span>
                    <h1>Expert Trading Insights</h1>
                    <p>Al Nafay Commodities provides cutting-edge trading strategies and personalized advisory to elevate your success in the fast-paced futures market.</p>
                    <div class="banner__three-title-bottom d-flex align-items-center">
                        <div class="banner__three-title-bottom-btn me-4">
                            <a class="btn-seven" href="https://www.aof.com.pk/?NDQyNzg3NjQ0ODE0ODI5NDMyNDIyODE3NDQ5ODk0NzQyNzc4MzI2OA==">Start Now <i class="far fa-chevron-double-right"></i></a>
                        </div>
                        <div class="banner__three-title-bottom-video d-flex align-items-center">
                            <div class="banner__three-title-bottom-video-icon">
                                <a class="video-popup" id="open-video-modal" data-bs-toggle="modal" data-bs-target="#videoModal">
                                    <i class="fal fa-play"></i>
                                </a>
                            </div>
                            <h6 class="ms-2">Watch the Video</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="swiper banner__three__slider banner__three-image dark__image">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/b4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/b7.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/b2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/banner/b4.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <style>
    /* Custom styles for desktop view */
    @media (min-width: 992px) { /* Targets large screens */
        #videoModal .modal-dialog {
            max-width: 50% !important; /* Set width to 50% on desktop */
            height: 50% !important; /* Set height to 50% on desktop */
        }
        #videoModal .modal-content {
            height: 100%; /* Ensures content fills the modal */
        }
        #videoModal .modal-body {
            height: 100%; /* Makes sure the body fills the modal */
        }
        #videoModal .ratio {
            height: 100%; /* Keep video responsive within 50% height */
        }
    }
</style>

<div class="modal fade mt-5" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Watch the Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/AzNAsbdVtDU?si=QfWM_LgmYE_an1J0" allowfullscreen
                        style="border: 0;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Banner Area End -->

<!-- Features Area Start -->
<div class="features py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features-area-item p-4">
                    <span><i class="far fa-arrow-right"></i></span>
                    <h4>User Onboarding</h4>
                    <p>Streamlined registration for instant access to market insights.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features-area-item p-4">
                    <span><i class="far fa-arrow-right"></i></span>
                    <h4>Personalized Analysis</h4>
                    <p>Custom reports to inform your trading strategies.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="features-area-item p-4">
                    <span><i class="far fa-arrow-right"></i></span>
                    <h4>Empowered Trading</h4>
                    <p>Trade with confidence on a secure, transparent platform.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Area End -->

<!-- About Area Start -->
<div class="about__three section-padding py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 mb-4">
                <div class="about__three-title">
                    <span class="subtitle-three">About Us</span>
                    <h2>Al Nafay Commodities: Your Trading Edge</h2>
                    <p>Al Nafay Commodities (Pvt) Limited, a distinguished PMEX member, propels your investment journey with unparalleled portfolio management, strategic consultancy, and a gateway to commodity trading.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="about__three-right">
                    <img src="{{ asset('assets/img/b5.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Corporate Membership Section Start -->
<div class="corporate-membership section-padding py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-md-5 mb-4">
                <img src="{{ asset('assets/img/pmex.png') }}" alt="PMEX Logo" class="img-fluid">
                <p>A Corporate Member of Pakistan Mercantile Exchange (PMEX)</p>
                <p class="membership-number">Membership No: 090</p>
            </div>
            <div class="col-md-1 d-none d-md-block">
                <hr class="vertical-line">
            </div>
            <div class="col-md-5 mb-4">
                <img src="{{ asset('assets/img/secp.png') }}" alt="SECP Logo" class="img-fluid">
                <p>Licensed and Regulated by SECP</p>
                <p class="membership-number">License No: 383</p>
            </div>
        </div>
    </div>
</div>
<!-- Corporate Membership Section End -->

<!-- Services Area Start -->
<div class="services__three section-padding py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-xl-12 text-center">
                <div class="services__three-title">
                    <span class="subtitle-three">Market-Leading Expertise</span>
                    <h2>Expert Trading Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper services__three-slider">
                    <div class="swiper-wrapper">
                        <div class="services__three-item swiper-slide text-center">
                            <img src="{{ asset('assets/img/pages/gold.png') }}" class="img-fluid mb-3" alt="">
                            <h4><a href="{{ route('metal.index') }}">Gold Trading</a></h4>
                            <p>Engage with the timeless allure of gold, a secure asset in volatile markets.</p>
                        </div>
                        <div class="services__three-item swiper-slide text-center">
                            <img src="{{ asset('assets/img/pages/metal.png') }}" class="img-fluid mb-3" alt="">
                            <h4><a href="{{ route('metal.index') }}">Metal Trading</a></h4>
                            <p>Invest in the strength of metals, crucial materials in markets.</p>
                        </div>
                        <div class="services__three-item swiper-slide text-center">
                            <img src="{{ asset('assets/img/pages/petrol.png') }}" class="img-fluid mb-3" alt="">
                            <h4><a href="{{ route('energy.index') }}">Energy Sector Trading</a></h4>
                            <p>Power your portfolio with dynamic energy commodities trading.</p>
                        </div>
                        <div class="services__three-item swiper-slide text-center">
                            <img src="{{ asset('assets/img/pages/agri.png') }}" class="img-fluid mb-3" alt="">
                            <h4><a href="{{ route('agriculture.index') }}">Agriculture Investments</a></h4>
                            <p>Cultivate growth with investments in the diverse agriculture sector.</p>
                        </div>
                    </div>
                    <!-- Arrows -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!-- Blog Area Start -->
<div class="blog__three dark__image section-padding py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-xl-12 text-center">
                <div class="blog__three-title">
                    <span class="subtitle-three">From the blog</span>
                    <h2>News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="row blog-slider">
            @foreach ($blogs as $blog)
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="blog__three-item">
                        <div class="blog__three-item-image">
                            <a href="{{ route('blog.title', $blog->title) }}">
                                @if ($blog->image)
                                    <img class="img-fluid" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                @endif
                            </a>
                        </div>
                        <div class="blog__three-item-content mt-3">
                            <ul class="blog-meta list-inline">
                                <li class="list-inline-item"><i class="far fa-folder"></i> {{ $blog->category }}</li>
                            </ul>
                            <h4><a href="{{ route('blog.title', $blog->title) }}">{{ $blog->title }}</a></h4>
                            <a class="simple-btn-1" href="{{ route('blog.title', $blog->title) }}">Read More <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Area End -->

<!-- Subscribe Area Start -->
<div class="subscribe py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-3">
                <h2>Stay informed, subscribe to our newsletter</h2>
            </div>
            <div class="col-xl-6 col-lg-6">
                <form action="#" class="d-flex">
                    <input type="email" class="form-control me-3" placeholder="Email Address" required>
                    <button class="btn-seven" type="submit">Subscribe Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Area End -->

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.blog-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>
@endsection
