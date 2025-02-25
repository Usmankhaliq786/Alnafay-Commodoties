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
                        <li>Metals</li>
                    </ul>
                    <h1>Metals</h1>
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
                        <h2>Gold</h2>
                        <p>Gold is renowned as a secure refuge for investors, often sought to safeguard against the
                            impacts of Central bank decisions, economic shifts, political uncertainties, social crises,
                            and fluctuations in fiat currencies. Additionally, gold serves as a medium of monetary
                            exchange in diverse countries and holds significance as a standard for monetary
                            transactions, both in the minting of coins and the crafting of jewelry. Notably, the value
                            of gold has recently experienced a substantial surge, and indications suggest that this
                            upward momentum is poised to persist.</p>
                        <p>After the gold discovery in California in 1848, North America emerged as a major global gold
                            supplier. Between 1850 and 1875, more gold was unearthed here than in the preceding 350
                            years. By 1890, Alaska and the Yukon had become principal sources, and subsequent findings
                            in the African Transvaal surpassed even these. Today, key gold-producing countries include
                            South Africa, the United States, Australia, Canada, China, Indonesia, and Russia.</p>
                        <p>Gold is naturally found in quartz veins and secondary alluvial deposits as a free metal, and
                            due to its near-indestructible nature, much of the historically mined gold still exists
                            above ground in various forms.
                            Beyond its historical allure, gold is a crucial industrial commodity. It boasts exceptional
                            malleability and ductility and serves as an excellent conductor of heat and electricity. In
                            electronics, gold finds significant industrial use, and it has been a staple in dental
                            applications for nearly 3,000 years. Other uses encompass decorative gold leaf, reflective
                            glass, and jewelry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/gold1.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="about__company-right mb-5">
                <div class="about__company-right-title">
                    <p>In 1792, the United States formally assigned a monetary role to gold, establishing a
                        bimetallic standard by backing the nation's currency with both gold and silver. This meant
                        that the U.S. government was ready to exchange paper currency for a predetermined amount of
                        gold, linking the paper currency to a tangible asset with intrinsic value.</p>
                    <p>A dominant force in the electrical realm, copper finds itself at the heart of about 75% of total
                        copper usage, with building construction emerging as the largest market. Remarkably, the average
                        U.S. home boasts a substantial 400 pounds of copper. But copper's impact goes beyond
                        conductivity and construction..</p>
                    <p>Copper's innate antibacterial properties, rendering it biostatic, make it a frontline defender
                        against the spread of disease. From air conditioning systems to doorknobs and food processing
                        surfaces, copper's role in maintaining hygiene is indispensable.</p>
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
                        <img src="{{asset('assets/img/about/copper.jpg')}}" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>Copper</h2>
                        <p>Copper, often referred to as the "Red Metal," holds the esteemed position of being the third
                            most widely consumed industrial metal globally. This soft, malleable, and ductile metal
                            boasts exceptional thermal and electrical conductivity, making it a cornerstone in the
                            manufacturing of electric equipment, appliances, and motors. Beyond its industrial
                            applications, copper also finds utility in coinage. As industrial activity continues to
                            burgeon across major economies, the demand for copper experiences a steady and relentless
                            increase.</p>
                        <p>Copper's antimicrobial properties have ushered in innovative applications in healthcare
                            settings. It is increasingly being used in high-touch surfaces in hospitals, such as
                            doorknobs and bed rails, to reduce the spread of infections. This biocidal property is also
                            leveraged in the agriculture sector for controlling plant diseases.</p>
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
                        <h2>Platinum</h2>
                        <p>Platinum, a precious metal rarer than gold, stands out among its peers with major deposits
                            located in Russia and South Africa. Its distinction lies in being one of the least reactive
                            metals, showcasing remarkable resistance to corrosion even under high temperatures. Embraced
                            for its unique properties, platinum finds significant application in jewelry, electronics,
                            and automobiles. With platinum prices witnessing an upward trend, it has become a favored
                            choice for investors looking to diversify their portfolios.</p>
                        <p>As one of the scarcest metals globally, annual platinum mine production is a mere 5 million
                            troy ounces, an amount that could comfortably fit within your living room. The mining stage
                            is a global affair, led by South Africa, contributing nearly 80% of the world's supply,
                            followed by Russia and North America.
                            Beyond its rarity, platinum graces the jewelry industry, cherished for its everlasting white
                            luster and resistance to tarnish. The global demand for platinum in jewelry forms the
                            majority, with Europe and the U.S. setting the purity standard at 95%. Crafting just one
                            ounce of pure platinum requires a meticulous process involving the extraction of ten tons of
                            ore over five months.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/platinum.jpg')}}" alt="">
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
                        <img src="{{asset('assets/img/about/palladium.jpg')}}" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>Palladium</h2>
                        <p>Palladium a rare and lustrous metal with a silvery-white appearance, holds the distinction of
                            having the lowest melting point and being the least dense among the Platinum Group Metals.
                            Its primary application in the contemporary landscape is found in catalytic converters,
                            representing the largest use of palladium. Beyond this pivotal role, palladium finds itself
                            woven into various facets of modern life, being utilized in jewelry, dentistry, watchmaking,
                            blood sugar test strips, aircraft spark plugs, surgical instruments, and the electronics
                            industry.</p>
                        <p>The automotive industry emerges as the primary consumer of palladium, notably in catalytic
                            converters where its catalytic prowess transforms pollutants from internal combustion
                            engines into less harmful components. With stringent regulations addressing harmful
                            emissions, palladium has become the favored alternative to platinum, which was the metal of
                            choice in the past.
                            Since 1966, palladium coins have been in circulation, and various mints and refiners produce
                            exquisite items from this highly valuable metal. While yellow gold remains traditional for
                            jewelry, palladium's popularity rises in white gold alloys. In its purer forms, often at 950
                            fineness, palladium graces the jewelry industry, electronics sector, and dental amalgams
                            where its corrosion resistance and luster-enhancing properties shine.
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
                <div class="about__company-left">
                    <div class="about__company-left-title">
                        <h2>Silver</h2>
                        <p>Silver has captivated human interest for millennia, with relics from ancient civilizations
                            showcasing its versatility in crafting jewelry, religious artifacts, and durable food
                            vessels. In 1792, silver took center stage in the United States monetary system as Congress
                            anchored the currency to the silver dollar and its fixed relationship to gold. The metal was
                            a cornerstone in the nation's coinage until its discontinuation in 1965.</p>
                        <p>Today, silver futures emerge not just as hedging tools for commercial producers and users but
                            as dynamic instruments offering global price discovery and opportunities for portfolio
                            diversification. These futures contracts open doors to the vibrant and highly liquid metal
                            market, bringing the advantages of central clearing and enhanced price transparency to savvy
                            investors.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/silver.jpg')}}" class="responsive-image">
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