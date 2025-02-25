<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>AL Nafay Commodities | Admin Login </title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{asset('auth/css/style.min.css')}}" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="#" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{asset('assets/img/logo.png')}}" width="180" alt="">
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg"
                                alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder text-center">Al Nafay Commodities</h2>
                                <p class=" mb-9 text-center">Your Admin Dashboard</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <x-input-label for="email" :value="__('Email')" class="form-label" />
                                        <x-text-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"
                                            style="font-size:0.75rem;" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-4">
                                        <x-input-label for="password" :value="__('Password')" class="form-label" />
                                        <x-text-input id="password" class="form-control" type="password" name="password"
                                            required autocomplete="current-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger"
                                            style="font-size:0.75rem;" />
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input id="remember_me" type="checkbox" class="form-check-input"
                                                name="remember">
                                            <label class="form-check-label" for="remember_me">{{ __('Remember me')
                                                }}</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-primary fw-medium">{{
                                            __('Forgot your password?') }}</a>
                                        @endif
                                    </div>

                                    <!-- Submit Button -->
                                    <x-primary-button class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                                        {{ __('Log in') }}
                                    </x-primary-button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
