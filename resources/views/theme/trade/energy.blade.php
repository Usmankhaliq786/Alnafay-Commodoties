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
                        <li>Energy</li>
                    </ul>
                    <h1>Energy</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>CRUDE OIL</h2>
                        <p>The discourse surrounding the remaining oil reservoirs on our planet is perhaps the most
                            contentious debate of our era. While some envision centuries of oil extraction ahead, others
                            warn of potential shortages as early as 2015. Adding to the complexity is the speculation
                            that OPEC strategically manages major oil supplies to uphold market prices.
                            In the realm of Crude Oil trading, two primary types take center stage: Brent Crude and West
                            Texas Intermediate (WTI). WTI serves as a benchmark for oil pricing, being the most
                            referenced in oil prices and characterized by its light composition. In contrast, Brent
                            Crude, sourced from the North Sea, differs in weight and constitutes two-thirds of
                            internationally traded Crude Oil.
                        </p>
                        <p>Crude Oil, the foundational form of petroleum, traces its origins back millions of years to
                            the remnants of ancient aquatic plants and animals. Beyond its economic importance,
                            historical societies like the Persians and pre-Columbian Indians attributed medicinal
                            benefits to Crude Oil. Bitumen, a tarry form of crude, played diverse roles in ancient
                            civilizations, from caulking ships to adorning jewels and securing weapon handles.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/oil.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="about__company-right mb-4">
                <div class="about__company-right-title">
                    <p>During the 19th century in America, the discovery of oil often brought dismay to pioneers seeking
                        water or brine. The turning point came in 1854 with the invention of the kerosene lamp, sparking
                        the first large-scale demand for petroleum.</p>
                    <p>Despite its rich history, Crude Oil remains a relatively abundant commodity. The world has
                        already produced around 650 billion barrels, with another trillion barrels in proved reserves
                        yet to be extracted. Serving as the world's inaugural trillion-dollar industry, Crude Oil
                        continues to dominate global trade as the single largest product.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/bent.jpg')}}" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>BRENT OIL</h2>
                        <p>Originally coined from the Brent oilfield in the North Sea, located off the UK's coast, the
                            term "Brent" has evolved to encompass four distinct crude oil grades sourced from various
                            North Sea wells—Brent blend, Forties blend, Oseberg, and Ekofisk, collectively known as
                            BFOE. Despite this amalgamation, Brent has transitioned to a slightly heavier oil, yet it
                            remains relatively light and low in sulfur.</p>
                        <p>The strategic location of Brent, near the UK and Norway, makes it an accessible and
                            sought-after commodity. Even with the increased weight, Brent remains ideal for refining
                            processes. Its waterborne extraction from oil fields close to the UK coast enhances its
                            appeal, facilitating direct offloading onto oil tankers for seamless global transportation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-12 col-xl-12 mt-5">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <p>Transportation flexibility extends to various options, including direct shipment via oil tankers
                        across the seas or shorter distances to oil terminals like the Sullom Voe Terminal in the
                        Shetland Islands for storage before loading onto tankers. Additionally, Brent can be efficiently
                        sent through pipelines to refineries and storage facilities along the UK coast</p>
                    <p>The combination of easy transportation and high-quality positions Brent as an attractive
                        investment. Its pivotal role in crude oil pricing and its global adoption as a major benchmark
                        further solidifies Brent's status as the liquid gold of the North Sea, influencing the dynamics
                        of the oil market on a global scale.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>NATURAL GAS</h2>
                        <p>Natural Gas, a fossil fuel, maintains a colorless, shapeless, and odorless presence in its
                            pure state, consisting primarily of methane. However, it can also encompass other
                            hydrocarbon gases like ethane, propane, butane, and pentane. Known for its combustible
                            nature, clean combustion, and high energy output, Natural Gas stands as a formidable energy
                            resource.</p>
                        <p>Dating back to approximately 500 BC, the Chinese made a groundbreaking discovery regarding
                            the harnessing of energy from Natural Gas. They ingeniously passed it through primitive
                            bamboo shoot pipes, using the burned gas to boil seawater and create potable fresh water.
                            Fast forward to 1785, and Britain pioneered the commercial use of Natural Gas produced from
                            coal, employing it for streetlights and indoor illumination.
                        </p>
                        <p>In 1821, William Hart marked a significant milestone by digging the first well explicitly
                            designed for obtaining Natural Gas, earning him the title of the "father of Natural Gas in
                            America."</p>
                        <p>Abundant reservoirs of Natural Gas are estimated to still lie beneath the surface in the US.
                            As an energy source, Natural Gas proves significantly more cost-effective than electricity
                            per British thermal unit (Btu), with Btu being a traditional unit of energy equivalent to
                            about 1,055 joules or roughly the energy required to heat one pound of water.</p>
                        <p>The Natural Gas futures contract involves the delivery of 10,000 million British thermal
                            units (mmBtu) at the Henry Hub in Louisiana, a prominent distribution hub serving as the
                            nexus for 16 intra and interstate pipelines.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-right">
                    <div class="about__company-right-image dark__image">
                        <img src="{{asset('assets/img/about/gas.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer__two all-footer" data-background="assets/img/shape/footer-bg-1.png">
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
@endsection