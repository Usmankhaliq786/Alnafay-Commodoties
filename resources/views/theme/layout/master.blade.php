<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Al Nafay Commodities">
    <meta name="keywords" content="Al Nafay Commodities, al Nafay">
    <meta name="author" content="Al Nafay">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>Al Nafay Commodities </title>

    <meta name="description"
        content="Al Nafay Commodities (Pvt) Limited, A Distinguished PMEX Member, Propels Your Investment Journey With Unparalleled Portfolio Management, Strategic Consultancy, And A Gateway To Commodity Trading. Our Dedicated Team Ensures Your Ventures Are Managed With Expertise And A Commitment To Your Financial Success. Proudly Upholding Our PMEX Membership #316, We Adhere To The Highest Standards Of Trading Excellence.">
    <meta name="keywords"
        content="Al Nafay Commodities, PMEX, Portfolio Management, Commodity Trading, Financial Success, Trading Excellence, Investment, Strategic Consultancy">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.alnafaycommodities.com/">
    <meta property="og:title" content="Al Nafay Commodities | Admin Panel">
    <meta property="og:description"
        content="Al Nafay Commodities (Pvt) Limited offers unparalleled portfolio management, strategic consultancy, and a gateway to commodity trading.">
    <meta property="og:image" content="{{ asset('assets/img/social-preview.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.alnafaycommodities.com/">
    <meta property="twitter:title" content="Al Nafay Commodities | Admin Panel">
    <meta property="twitter:description"
        content="Al Nafay Commodities (Pvt) Limited offers unparalleled portfolio management, strategic consultancy, and a gateway to commodity trading.">
    <meta property="twitter:image" content="{{ asset('assets/img/lgo.png') }}">
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">
    <!-- SLick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    @yield('css')
</head>

<body>
    <!-- Preloader Start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="spinner-bounce one"></div>
            <div class="spinner-bounce two"></div>
            <div the="spinner-bounce three"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Dark Light Start -->
    {{-- <div class="switch__tab">
        <span class="switch__tab-btn active light-mode-title"></span>
        <span class="mode__switch three" onclick="darkLight()"><span></span></span>
        <span class="switch__tab-btn dark-mode-title"></span>
    </div> --}}
    <!-- Dark Light End -->
    <!-- Header Area Start -->
    @include('theme.includes.header')
    <!-- Header Area End -->
    @yield('content')
    <!-- Footer One Area Start -->
    @include('theme.includes.footer')
    <!-- Footer One Area End -->
    <!-- Scroll Btn Start -->
    {{-- <div class="scroll-up scroll-three">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}
    <!-- Scroll Btn End -->
    <!-- Main JS -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Progressbar JS -->
    <script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper Bundle JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Mean Menu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Sweet Alert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <!-- Tidio Chat -->
    <script src="//code.tidio.co/bzy9pb4rn9ucwg1y9gycbabxeervmiqb.js" async></script>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/923009267854" class="whatsapp-button" target="_blank">
        <img src="{{ asset('assets/img/whatsappp.png') }}" alt="WhatsApp">
    </a>
    <style>
        .corporate-membership {
            padding: 50px 0;
            background: #f9f9f9;
        }

        .membership-logo1 {
            max-width: 220px;
            margin-bottom: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .membership-logo {
            max-width: 150px;
            margin-bottom: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .membership-logo:hover {
            transform: scale(1.05);
        }

        .corporate-membership p {
            font-size: 16px;
            color: #333;
        }

        .membership-number {
            font-weight: bold;
            font-size: 18px;
            color: #000;
        }

        .vertical-line {
            width: 1px;
            height: 100px;
            background: #ddd;
            margin: 0 auto;
        }

        .corporate-membership .col-md-5 {
            padding: 20px;
        }

        @media (max-width: 768px) {
            .corporate-membership .col-md-1 {
                display: none;
            }

            .corporate-membership .col-md-5 {
                padding: 10px;
            }
        }

        .whatsapp-button {
            position: fixed;
            bottom: 110px;
            right: 15px;
            border-radius: 50%;
            padding: 10px;
            z-index: 1000;
        }

        .whatsapp-button img {
            width: 60px;
            height: 60px;
        }

        @media (max-width: 768px) {
            .whatsapp-button {
                right: 5px;
                bottom: 110px;
            }
        }
    </style>

    @yield('script')
</body>

</html>
