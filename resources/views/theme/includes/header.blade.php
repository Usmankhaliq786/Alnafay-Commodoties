<div class="header__three">
    <!-- Top Bar Start -->
    <div class="topbar__three">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="topbar__three-left lg-t-center">
                        <a href="#"><i class="fas fa-bell icon-animation"></i>We help take your business the
                            next level.</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="topbar__three-right t-right lg-t-center">
                        <ul>
                            <li><a href="tel:04235198074,03009267854"><i class="fas fa-phone-alt"></i>0423 519 8074,
                                    0300 926 7854</a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i>support@alnafaycommodities.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Menu Bar Area Start -->
    <div class="header__area header__sticky">
        <div class="container">
            <div class="header__area-menubar three">
                <div class="header__area-menubar-left col-sm-2">
                    <div class="header__area-menubar-left-logo">
                        <a href="{{ route('home') }}"><img class="dark-n" src="{{ asset('assets/img/logo.png') }}"
                                alt=""><img class="light-n" src="{{ asset('assets/img/logo-light.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="header__area-menubar-center col-sm-10">
                    <div class="header__area-menubar-center-menu three menu-responsive">
                        <ul id="mobilemenu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('career.index') }}">Careers</a></li>
                            <li class="menu-item-has-children"><a href="#">Invest</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('account-opening.index') }}">Account Opening Procedure</a>
                                    </li>
                                    <li><a href="{{ route('individual-joint-trading-account.index') }}">Individual &
                                            Joint Account</a></li>
                                    <li><a href="{{route('corporate-trading-account.index')}}">Open Corporate Accounts</a></li>
                                    {{-- <li><a href="#">Commission Structure</a></li> --}}
                                    <li><a href="{{route('investors-complaint-form.index')}}">Investor Complaint Form</a></li>
                                    <li><a href="{{ route('dos-and-donts.index') }}">Do's and Don'ts</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Trade</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('commodity.index') }}">Commodities</a></li>
                                    <li><a href="{{ route('metal.index') }}">Metals</a></li>
                                    <li><a href="{{ route('energy.index') }}">Energies</a></li>
                                    <li><a href="{{ route('currency.index') }}">Currencies</a></li>
                                    <li><a href="{{ route('indices.index') }}">Indices</a></li>
                                    <li><a href="{{ route('agriculture.index') }}">Agriculture</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="/all-blogs">Blogs</a>
                            <ul class="sub-menu">
                                    <li><a href="/awards">Awards</a></li>
                                    <li><a href="/events">Event's</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ route('about.index') }}">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="/about-alnafay">About Al Nafay</a></li>
                                    <li><a href="/license">License</a></li>
                                    <li><a href="team-alnafay">Team Al Nafay</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-box">
                        <div class="header__area-menubar-right-box-search">
                            <div class="search">
                                <span class="header__area-menubar-right-box-search-icon open"><i
                                        class="fal fa-search"></i></span>
                            </div>
                            <div class="header__area-menubar-right-box-search-box">
                                <form>
                                    <input type="search" placeholder="Search Here.....">
                                    <button type="submit"><i class="fal fa-search"></i>
                                    </button>
                                </form> <span class="header__area-menubar-right-box-search-box-icon"><i
                                        class="fal fa-times"></i></span>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-box-btn">
                            <a class="btn-seven"
                                href="https://www.aof.com.pk/?NDQyNzg3NjQ0ODE0ODI5NDMyNDIyODE3NDQ5ODk0NzQyNzc4MzI2OA==">Start
                                Trading<i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                    <div class="responsive-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .header__area-menubar{
     width: 100% !important;
    }
    .header__area-menubar-left{
        width: 10% !important;
    }
    .header__area-menubar-center{
        width: 70% !important;
        flex-wrap: nowrap !important;

    }
    .header__area-menubar-right{
        width: 20% !important;
    }
    @media screen and (min-width: 768px) and (max-width: 1024px) {
    .header__area-menubar-center {
        width: 100% !important;
        min-width: 800px !important;
        background-color: green; /* Corrected */
    }
}

</style>
