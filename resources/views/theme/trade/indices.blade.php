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
                        <li>Indices</li>
                    </ul>
                    <h1>Indices</h1>
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
                        <h2>What are indices?</h2>
                        <p>Indices serve as a gauge for assessing the performance of a collection of listed stocks on an
                            exchange. Given that there is no tangible asset involved in index trading, the majority of
                            index trading relies on financial derivatives such as CFDs.
                        </p>
                        <p>In an effort to offer investors and market participants a broader array of investment
                            opportunities, PMEX has introduced trading in the indices of the world's four largest stock
                            exchanges:</p>
                        <ul>
                            <li>DOW JONES 30</li>
                            <li>SPX 500</li>
                            <li>NASDAQ 100</li>
                            <li>NASDAQ 100</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/indices.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6 xl-mb-30">
            <div class="about__company-left">
                <div class="about__company-left-image dark__image">
                    <img src="{{asset('assets/img/about/188.jpg')}}" class="responsive-image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <p><strong>How Al Nafay approaches index trading</strong></p>
                    <ol>
                        <li>Begin by establishing a trading account with Alnafay</li>
                        <li>Conduct in-depth research on your chosen index</li>
                        <li>Decide on your preferred trading strategy</li>
                        <li>Complete payments conveniently using the Direct Fund Model.</li>
                        <li>Implement effective risk management strategies.</li>
                        <li>Keep a close eye on your open positions.</li>
                        <li>Execute orders, monitor positions, and reap the rewards.</li>
                        <li>Trade wisely and enjoy a successful trading experience with Al Nafay!</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <p><strong>Advantages of Index Trading:</strong></p>
                    <ol>
                        <li>Cost-effectiveness compared to trading individual stocks.</li>
                        <li>Gain exposure to an entire sector or economy with a single investment.</li>
                        <li>Provide a hedge against rising volatility in your stock portfolio or leveraged
                            positions.</li>
                        <li>Access convenient and user-friendly trading through a well-designed, award-winning
                            mobile app.</li>
                        <li>Trade both rising and falling markets by taking both long and short positions. </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 xl-mb-30">
            <div class="about__company-right">
                <div class="about__company-right-image dark__image">
                    <img src="{{asset('assets/img/about/2014.jpg')}}" class="responsive-image">
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
                        <h2>DOW Jones</h2>
                        <p>The Dow Jones Industrial Average (DJIA) stands as one of the oldest, most renowned, and
                            widely utilized indices globally, comprising the stocks of 30 of the largest and most
                            impactful companies in the United States. Serving as a prominent benchmark index for
                            blue-chip stocks in the U.S., the DJIA is a price-weighted index that monitors 30
                            significant publicly-owned companies listed on the New York Stock Exchange and the NASDAQ.
                            Originating in 1896 and named after Charles Dow, the Dow Jones offers a means to efficiently
                            access the primary benchmark for the U.S. stock market through a small-sized electronic
                            contract, potentially leading to reduced trading costs compared to individual stocks or
                            Exchange-Traded Funds (ETFs).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/daw.jpg')}}" alt="" class="responsive-image">
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
                        <img src="{{asset('assets/img/about/72427.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>NASDAQ</h2>
                        <p>NASDAQ, which stands for the National Association of Securities Dealers Automated Quotations,
                            is commonly used to denote the Nasdaq Composite. This index comprises over 3,000 stocks from
                            the Nasdaq exchange, featuring leading technology and biotech giants like Apple, Google,
                            Microsoft, Oracle, Amazon, and Intel. Serving as a global electronic marketplace for
                            securities trading, Nasdaq holds the distinction of being the world's inaugural electronic
                            exchange. Renowned technology companies, including Apple and Facebook, find their listings
                            on Nasdaq. Operating 25 markets, one clearinghouse, and five central securities depositories
                            in the United States and Europe, Nasdaq offers the NASDAQ-100 Index futures as an efficient
                            means to gain exposure to the top 100 large-cap domestic and international non-financial
                            companies listed on The NASDAQ stock market. This approach facilitates potential cost
                            savings compared to trading individual stocks or Exchange-Traded Funds (ETFs).
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
                        <h2>SPX</h2>
                        <p>The Standard & Poor's 500 Index, commonly referred to as the S&P 500, surpasses the DJIA in
                            terms of size and diversity. Comprising 500 of the most actively traded stocks in the U.S.,
                            it represents approximately 80% of the total value of U.S. stock markets. Serving as a
                            reliable indicator of overall movement in the U.S. marketplace, the S&P 500 includes
                            companies across various sectors such as energy, industrials, information technology,
                            healthcare, financials, and consumer staples. The S&P 500 futures contract provides an
                            efficient means to gain exposure to the principal benchmark for large-cap U.S. stocks and is
                            considered one of the most liquid stock index futures contracts globally. Additionally, this
                            approach offers potential cost savings compared to trading individual stocks or
                            Exchange-Traded Funds (ETFs).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/glow.jpg')}}" alt="" class="responsive-image">
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
                        <img src="{{asset('assets/img/about/njc.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>NIKKEI 225</h2>
                        <p>The Nikkei 225, also known as the Nikkei Stock Average, serves as a stock market index on the
                            Tokyo Stock Exchange, gauging the performance of 225 prominent publicly owned companies in
                            Japan across diverse industry sectors. As Japan's primary stock index, it encompasses the
                            country's top 225 blue-chip stocks. Utilizing a price-weighted methodology, the Nikkei
                            calculates an average of the share prices of all listed companies. Notable entities listed
                            in the Nikkei include Sony Corporation, Canon Inc, Nissan Motor Company, and Honda Motor
                            Company. The Nikkei 225 futures contract offers an efficient avenue to gain exposure to the
                            principal benchmark for large-cap Japanese stocks, recognized as one of the most liquid
                            stock index futures contracts globally. Moreover, this approach provides potential cost
                            advantages over trading individual stocks or Exchange-Traded Funds (ETFs).
                        </p>
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