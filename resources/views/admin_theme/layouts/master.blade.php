<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Al Nafay Commodities | Admin Panel</title>

    <!-- Favicon -->

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/core/libs.min.css')}}">

    <!-- Flatpickr css -->
    <link rel="stylesheet" href="{{asset('admin-assets/vendor/flatpickr/dist/flatpickr.min.css')}}">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/qompac-ui.minf700.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/custom.minf700.css')}}">
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/dark.minf700.css')}}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/customizer.minf700.css?v=1.0.1')}}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/rtl.minf700.css?v=1.0.1')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/loader.webp"
                    alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    @include('admin_theme.includes.sidebar')
    <main class="main-content">
        <div class="position-relative ">
            <!--Nav Start-->
            @include('admin_theme.includes.header')
            <!--Nav End-->
        </div>
        @yield('content')
    </main>
    <!-- Wrapper End-->

    <!-- Library Bundle Script -->
    <script src="{{asset('admin-assets/js/core/libs.min.js')}}"></script>
    <!-- Plugin Scripts -->
    <!-- Flatpickr Script -->
    <script src="{{asset('admin-assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/plugins/flatpickr.js')}}" defer></script>
    <!-- Select2 Script -->
    <script src="{{asset('admin-assets/js/plugins/select2.js')}}" defer></script>
    <!-- Slider-tab Script -->
    <script src="{{asset('admin-assets/js/plugins/slider-tabs.js')}}"></script>
    <!-- Lodash Utility -->
    <script src="{{asset('admin-assets/vendor/lodash/lodash.min.js')}}"></script>
    <!-- Utilities Functions -->
    <script src="{{asset('admin-assets/js/iqonic-script/utility.min.js')}}"></script>
    <!-- Settings Script -->
    <script src="{{asset('admin-assets/js/iqonic-script/setting.min.js')}}"></script>
    <!-- Settings Init Script -->
    <script src="{{asset('admin-assets/js/setting-init.js')}}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{asset('admin-assets/js/core/external.min.js')}}"></script>
    <!-- Widgetchart Script -->
    <script src="{{asset('admin-assets/js/charts/widgetchartsf700.js?v=1.0.1')}}" defer></script>
    <!-- Dashboard Script -->
    <script src="{{asset('admin-assets/js/charts/dashboardf700.js?v=1.0.1')}}" defer></script>
    <!-- qompacui Script -->
    <script src="{{asset('admin-assets/js/qompac-uif700.js?v=1.0.1')}}" defer></script>
    <script src="{{asset('admin-assets/js/sidebarf700.js?v=1.0.1')}}" defer></script>
    @yield('scripts')
</body>

</html>
