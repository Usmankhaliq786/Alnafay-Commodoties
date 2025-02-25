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
                        <li>Agriculture</li>
                    </ul>
                    <h1>Agriculture</h1>
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
                        <h2>Agricultural products</h2>
                        <p>Agricultural products encompass a diverse range of items, varying from one country to
                            another. Examples include Cotton, Wheat, Sugar, Corn, Rice, and Spices. PMEX provides
                            products across four primary asset classes: metals, agriculture, energy, and financial
                            futures. Each commodity features a selection of contracts based on currency denomination,
                            contract size, and duration.
                        </p>
                        <p>PMEX presents a broad array of products aligned with those Pakistan produces, exports, and
                            imports, as well as offerings listed on major international exchanges worldwide. Following a
                            thorough assessment, the Exchange has curated a selection of products, incorporating both
                            local and physically deliverable futures, along with international and cash-settled futures.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/agri.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-4 col-xl-4">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <p><strong>Embracing the Future of Agriculture</strong></p>
                    <p>In the heart of nature's vast expanses, technology and tradition converge to cultivate a brighter
                        future. Our commitment to agricultural excellence is reflected in the seamless integration of
                        innovative practices with the nurturing touch of seasoned hands. The image encapsulates this
                        fusion, showcasing the verdant growth of young crops under the watchful eye of modern farming
                        techniques.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-xl-8 xl-mb-30">
            <div class="about__company-right">
                <div class="about__company-right-image dark__image">
                    <img src="{{asset('assets/img/about/green.png')}}" class="responsive-image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about__company section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-8 col-xl-8 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/go.png')}}" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <p><strong>Nurturing Growth Through Innovation and Tradition</strong></p>
                        <p>In the embrace of fertile soils, a young plant unfurls its leaves, symbolizing the dawn of
                            growth
                            and the promise of harvest. This image captures the essence of modern agriculture—a blend of
                            innovation and time-honored practices that cultivates not just crops, but a sustainable
                            future.
                        </p>
                    </div>
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
                        <h2>Wheat</h2>
                        <p>Wheat played a pivotal role in the social and cultural development of humanity, marking the
                            initiation of large-scale cultivation and long-term storage. This significant shift allowed
                            the establishment of city-based societies and laid the foundation for civilization.
                        </p>
                        <p>Originating as a wild grass in southwestern Asia, archaeological evidence suggests that wheat
                            cultivation began in the Nile Valley around 5,000 BC. While not native to the U.S., wheat
                            was first grown on the Massachusetts coast in 1602.</p>
                        <p>In commodity trading, wheat must be categorized into specific classes based on grain
                            properties defined by exchange contracts. One such class is Soft Red Winter Wheat, named for
                            its cultivation during U.S. winter months. Typically grown in humid environments like the
                            South, Great Lakes region, and the Atlantic coast, the planting season ranges from
                            mid-August to the end of October, with harvesting occurring in late May. Soft Red Winter
                            Wheat is a crucial ingredient for various food products, including bread, pasta, and
                            crackers, as well as industrial starches and adhesives.</p>
                        <p>Chicago Wheat futures offer an effective means to manage global price risks associated with
                            wheat trading for merchandisers, producers, food processors, livestock operations,
                            importers, and others. These futures contracts provide opportunities to identify cyclical
                            price and volatility patterns in both short and long-term scenarios.</p>
                        <p>Traders in Chicago Wheat futures can also capitalize on arbitrage and spread opportunities
                            with other commodities, including related grains, oilseeds, and livestock. Each Chicago
                            Wheat futures contract represents 5,000 bushels or approximately 136 metric tons.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/wheat.jpg')}}" alt="" class="responsive-image">
                    </div>
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
                        <img src="{{asset('assets/img/about/corn.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>Corn</h2>
                        <p>Corn, belonging to the grass family, is a native grain of the Americas, with fossils of its
                            pollen dating back over 80,000 years discovered in lake sediment beneath Mexico City.
                        </p>
                        <p>Archaeological findings reveal that cultivated Corn existed in the southwestern U.S. for at
                            least 3,000 years, indicating its significance as a food crop among indigenous people well
                            before the arrival of Europeans.</p>
                        <p>As a resilient plant, Corn thrives in various regions worldwide, adapting to altitudes
                            ranging from sea level to 12,000 feet in the South American Andes Mountains. It can flourish
                            in tropical climates with high rainfall of up to 400 inches per year, as well as in arid
                            regions receiving only 12 inches per year. The U.S. stands out as a major Corn producer,
                            yielding a staggering 333 million tonnes, nearly three times more than the second-leading
                            country, China. Efficient large-scale Corn harvesting in North America emerged after World
                            War II, replacing labor-intensive methods.</p>
                        <p>Despite substantial domestic consumption in applications such as fodder and ethanol
                            production, the U.S. Department of Agriculture estimates that the country still exports
                            around 1,859 million bushels of Corn to other nations.</p>
                        <p>Corn finds primary use as livestock feed globally, with additional applications including
                            alcohol additives for gasoline, adhesives, cooking oil, margarine, sweeteners, and human
                            consumption. A single Corn futures contract represents 5,000 bushels or approximately 127
                            metric tons.</p>
                    </div>
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
                        <h2>Cotton</h2>
                        <p>Cotton, a natural plant fiber, originates from small trees and shrubs within the mallow
                            family, with the American Upland cotton plant being a common source.
                        </p>
                        <p>Utilized in India for over 5,000 years, Cotton has historical applications among ancient
                            Chinese, Egyptians, and North and South Americans. European settlers in the U.S. cultivated
                            Cotton as one of their earliest crops.</p>
                        <p>Thriving in regions with a long growing season, abundant sunshine, and water during growth,
                            Cotton necessitates dry weather for harvesting. The U.S. Cotton Belt extends from northern
                            Florida to North Carolina and westward to California.</p>
                        <p>Planting time in the U.S. varies from early February in Southern Texas to early June in the
                            northern Cotton Belt. The plant's flower bud evolves into an oval boil that opens upon
                            maturity. Mechanical harvesting, involving spindle-type pickers or strippers, is employed
                            for approximately 95% of U.S. Cotton, followed by processing at cotton gins for drying,
                            cleaning, separation, and baling.</p>
                        <p>Cotton finds diverse applications in products ranging from clothing and home furnishings to
                            medical items. Its value is assessed based on staple (fiber length), grade (color,
                            brightness, and foreign matter), and character (fiber diameter, strength, body, maturity,
                            uniformity, and smoothness). Cotton stands as the fifth-leading cash crop in the U.S. and a
                            significant agricultural export, with weight measured in pounds and price quoted in cents
                            and hundredths of a cent per pound. A "bale" is conventionally deemed to equal 480 pounds.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/cotton.jpg')}}" alt="" class="responsive-image">
                    </div>
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
                        <img src="{{asset('assets/img/about/soyabean.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>Soybeans</h2>
                        <p>Soybeans rank among the most popular oilseed products globally, finding applications in
                            manufacturing plastics, solvents, and various industrial items. They serve as livestock
                            feed, edible oil, and other food products. In the U.S., Soybeans weren't utilized as a food
                            product until post the 1920s, although they held essential status in Asian cultures for
                            centuries before Western cultivation commenced.
                        </p>
                        <p>The world's top three producers, in order, are the U.S., Brazil, and Argentina. In the U.S.,
                            Soybeans are planted from May to mid-July, flowering between July and late August, with
                            harvesting from the end of September to late November. In Brazil, planting occurs from
                            September to mid-December, flowering from January to early March, and harvesting from the
                            end of March to late June. Soybean futures offer a means to efficiently manage the price
                            risk associated with Soybean transactions for merchandisers, producers, food processors,
                            livestock operations, importers, and others.</p>
                        <p>Futures contracts present opportunities to recognize short and long-term cyclical price and
                            volatility patterns. Soybean futures traders can leverage arbitrage and spread opportunities
                            with other commodities, encompassing related grains, oilseeds, and livestock.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer__two all-footer" data-background="{{asset('assets/img/shape/footer-bg-1.png')}}">
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