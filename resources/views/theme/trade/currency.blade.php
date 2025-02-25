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
                        <li>Currency</li>
                    </ul>
                    <h1>Currency</h1>
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
                        <h2>Understanding Currency Futures</h2>
                        <p>A currency future is a formal agreement outlining the predetermined price for the purchase or
                            sale of a currency, establishing a specific date for the transaction. These contracts adhere
                            to stringent regulations, obliging any contracting party still holding the agreement at its
                            expiration to accept the delivery of the currency on the agreed-upon date and at the
                            stipulated price.
                        </p>
                        <p>A currency future is a formal agreement outlining the predetermined price for the purchase or
                            sale of a currency, establishing a specific date for the transaction. These contracts adhere
                            to stringent regulations, obliging any contracting party still holding the agreement at its
                            expiration to accept the delivery of the currency on the agreed-upon date and at the
                            stipulated price.</p>
                        <ul>
                            <li>EURUSD</li>
                            <li>EURUSD</li>
                            <li>AUDUSD</li>
                            <li>USDJPY</li>
                            <li>USDCHF</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-left">
                    <div class="about__company-left-image dark__image">
                        <img src="{{asset('assets/img/about/currency.jpg')}}" alt="" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="about__company-right mb-4">
                <div class="about__company-right-title">
                    <h4>Explore the world of currency future:</h4>
                    <p>Dive into the dynamic realm of currency futures, where contracts outline the buying or selling
                        price of a currency, all tied to a specific future date. Immerse yourself in this highly
                        regulated arena, where holding onto a contract at expiration means legally committing to taking
                        delivery of the currency at the agreed-upon date and price.Uncover the potential, seize the
                        opportunities, and navigate the complexities of currency futures with PMEX. Engage in a journey
                        that goes beyond numbers, tapping into the pulse of global currency markets.</p>
                    <h4>Explore the world of currency future:</h4>
                    <p>The disparity between a spot and futures price lies in their foundation. While a spot price
                        reflects the current market value, a futures price is contingent on a projected market value in
                        the future. When an investor engages in a trade involving a spot currency rate, they might
                        employ a currency futures contract as a safeguard against risks associated with foreign exchange
                        fluctuations.</p>
                    <h4>Why Engage in Currency Trading?</h4>
                    <p>A nation with a robust economy and attractive investment prospects tends to possess a strong
                        currency, as global companies and investors seek to capitalize on the opportunities within that
                        country.
                        The currency's value is primarily influenced by two key factors: the monetary policy of the
                        central bank and the trade balance. An accommodative monetary policy, characterized by
                        low-interest rates, has a negative impact on a currency. This is because the central bank
                        aggressively injects new currency reserves into the market, and foreign investors are not
                        enticed by the low returns associated with these rates
                    </p>
                    <p>Conversely, a restrictive monetary policy, marked by high-interest rates, has a positive effect
                        on a currency. This is attributed to the limited supply of new currency reserves and the
                        alluring interest rate returns for foreign investors.</p>
                    <p>A currency experiences a bullish trend with a current account surplus, reflecting a net inflow of
                        the currency. On the flip side, a current account deficit exerts bearish pressure on a currency
                        due to the net outflow of the currency. Additionally, currency values are influenced by the
                        economic growth and investment prospects of the country.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-4">
    <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-left">
                <div class="about__company-left-title">
                    <h2>Currency Distribution in Global Sales</h2>
                    <p>Our latest financial analysis reveals a significant pattern in the currency distribution for
                        global sales. The Euro (EUR) stands out as the dominant currency, accounting for a substantial
                        58% of total sales. This dominance underscores the Euro's strong presence in international trade
                        and its widespread acceptance as a transaction currency.
                    </p>
                    <p>Trailing behind, the Japanese Yen (JPY) represents 13% of sales, showcasing Japan's influential
                        role in the global economy. The British Pound (GBP), with 12%, reflects the UK's significant
                        economic footprint and the currency's historical prominence.</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 xl-mb-30">
            <div class="about__company-right">
                <div class="about__company-right-image dark__image">
                    <img src="{{asset('assets/img/about/graph.png')}}" alt="" class="image-responsive">
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
                    <img src="{{asset('assets/img/about/ausdollar.jpg')}}" class="responsive-image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <h2>Australian Dollar</h2>
                    <p>The Australian Dollar serves as the official currency of the Commonwealth of Australia,
                        encompassing various territories and independent Pacific Island states. Internationally, it
                        is often abbreviated with the dollar sign ($) and distinguished within Australia with the
                        symbol A$. It is divided into 100 cents</p>
                    <p>Following the replacement of pounds, shillings, and pence with decimal currency on February
                        14, 1966, numerous names were considered for the new currency. Prime Minister Sir Robert
                        Menzies advocated for "the royal," but public preference led to the adoption of the dollar
                        over alternatives like the austral, oz, boomer, roo, kanga, emu, digger, kwid, dinkum, and
                        ming. The futures contract for the Australian Dollar provides a platform to assess its value
                        relative to the U.S. Dollar, manage risks associated with currency rate fluctuations, and
                        capitalize on profit opportunities arising from rate changes
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
                        <h2>British Pound</h2>
                        <p>The British Pound, also known as pound sterling, holds the distinction of being the world's
                            oldest currency still in active use, with origins dating back to Anglo-Saxon England in the
                            mid-8th century. It serves as the official currency for the United Kingdom, its Crown
                            Dependencies, and the British Overseas Territories. Ranking as the fourth most traded
                            currency globally following the U.S. Dollar, Euro, and Japanese Yen. It also holds the
                            position as the third most held reserve currency in global reserves.</p>
                        <p>The currency futures contract for the British Pound offers a platform for evaluating the U.S.
                            Dollar's relative value against the pound. Additionally, it facilitates the management of
                            risks linked to currency rate fluctuations in the currency markets and enables the
                            exploitation of profit opportunities arising from changes in rates.
                        </p>
                        <p>In the realm of international trade and finance, the pound sterling plays a crucial role. Its
                            stability and global recognition make it a preferred currency for many international
                            transactions and investments. The London foreign exchange market, where the pound is heavily
                            traded, is one of the largest and most significant financial markets worldwide, influencing
                            global exchange rates and financial policies.</p>
                        <p>Moreover, the British Pound futures market is a barometer for investor sentiment regarding
                            the UK's economic prospects. Movements in the futures market can reflect expectations about
                            monetary policy decisions made by the Bank of England, shifts in economic performance, or
                            reactions to political events in the UK.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-right">
                    <div class="about__company-right-image dark__image">
                        <img src="{{asset('assets/img/about/pound.jpg')}}" alt="" class="image-responsive">
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
                    <img src="{{asset('assets/img/about/cdollar.jpg')}}" class="responsive-image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <h2>Canadian Dollar</h2>
                    <p>The inception of the Canadian Dollar in 1871 marked a transition from the diverse local
                        currencies used across Canadian provinces. Since 1970, the Canadian Dollar's value has been
                        subject to a floating exchange rate, securing its position as the seventh most traded
                        currency globally. Similar to the U.S., the term "buck" is colloquially used in Canada to
                        refer to a dollar, a term that originated from describing the value of a beaver pelt in the
                        17th century.</p>
                    <p>The Canadian Dollar futures contract serves as a tool for evaluating the relative value of
                        the U.S. Dollar against the Canadian Dollar. Additionally, it aids in managing risks linked
                        to currency rate fluctuations in the currency markets and facilitates the exploration of
                        profit opportunities arising from changes in rates.
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
                        <h2>Euro Currency</h2>
                        <p>Introduced in 1999 as the unified currency of the European Union, the Euro is presently
                            utilized by 17 countries and ranks as the second most traded currency globally, following
                            the United States Dollar.</p>
                        <p>A nation boasting a robust economy and attractive investment prospects generally experiences
                            a strengthened currency, as global companies and investors seek to capitalize on the
                            opportunities within that country
                        </p>
                        <p>The Euro currency futures contract serves as a means to evaluate the relative value of the
                            U.S. Dollar against the Euro. Additionally, it aids in managing risks associated with
                            currency rate fluctuations in the currency markets and provides an avenue to leverage profit
                            opportunities arising from changes in rates.</p>
                        <p>Furthermore, the Euro futures market offers opportunities for speculation. Traders can use
                            their insights into the European economic outlook, policy decisions by the European Central
                            Bank (ECB), and other macroeconomic factors to make informed predictions about the Euro's
                            movement against other currencies.</p>
                        <p>As the Eurozone continues to navigate various economic challenges and opportunities, the Euro
                            remains a symbol of European financial unity and resilience. Its role extends beyond the
                            boundaries of the EU, impacting global markets and international economic relationships. The
                            Euro's influence on the world stage underscores its significance as a major currency in the
                            intricate tapestry of global finance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-right">
                    <div class="about__company-right-image dark__image">
                        <img src="{{asset('assets/img/about/euro.jpg')}}" alt="" class="image-responsive">
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
                        <img src="{{asset('assets/img/about/yen.jpg')}}" class="responsive-image">
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="about__company-right">
                    <div class="about__company-right-title">
                        <h2>Japanese Yen</h2>
                        <p>The Yen became Japan's official currency in 1871 under the Meiji government, simplifying the
                            complex currency system of the Edo period. Since the collapse of the Bretton Woods system
                            and the shift to floating exchange rates, the Japanese Yen's value has similarly floated.
                            However, due to its floating exchange rate, the Japanese Yen is considered highly volatile.
                        </p>
                        <p>Ranking as the third most traded currency globally, the Yen's popularity is likely influenced
                            by its perceived undervaluation compared to the US Dollar and British Pound. Key factors
                            impacting a currency's value include central bank monetary policy and the trade balance.
                        </p>
                        <p>The Japanese Yen futures contract serves as a tool for evaluating the relative value of the
                            U.S. Dollar against the Japanese Yen. It aids in managing risks linked to currency rate
                            fluctuations in the currency markets and provides a means to capitalize on profit
                            opportunities arising from changes in rates.</p>
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
                        <h2>Swiss Franc</h2>
                        <p>The Swiss Franc, established in 1798 by Swiss cantons, became the official monetary unit of
                            Switzerland and Lichtenstein in 1859 when the issuance of money was centralized to the
                            federal government. Recognized as one of the world's strongest currencies, the Swiss Franc
                            is renowned for its low volatility and minimal correlation with returns on foreign assets.
                            Traditionally viewed as a 'safe-haven currency,' the Swiss Franc experiences almost zero
                            inflation. As the sixth most traded currency globally, Swiss bank notes feature all four
                            national languages, including German, French, Romansh, and Italian.
                            The Swiss Franc futures contract serves as a tool to evaluate the relative value of the U.S.
                            dollar against the Swiss Franc. It aids in managing risks related to currency rate
                            fluctuations in the currency markets and offers opportunities to capitalize on profit
                            potential arising from changes in rates. The Swiss Franc is occasionally denoted as CHF,
                            representing the foederatio Helvetica Franc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 xl-mb-30">
                <div class="about__company-right">
                    <div class="about__company-right-image dark__image">
                        <img src="{{asset('assets/img/about/swiss.jpg')}}" alt="" class="image-responsive">
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
                    <img src="{{asset('assets/img/about/usd.jpg')}}" class="responsive-image">
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <div class="about__company-right">
                <div class="about__company-right-title">
                    <h2>U.S. Dollar Index</h2>
                    <p>The U.S. Dollar Index futures contract stands as a prominent benchmark for assessing the
                        international value of the U.S. Dollar, recognized as the most widely traded currency index
                        globally. This contract allows market participants to track fluctuations in the U.S.
                        Dollar's value relative to a basket of world currencies and provides a means to hedge
                        portfolios against the risk of dollar movements.
                    </p>
                    <p>Introduced on November 20, 1985, on the Financial Instruments Exchange, a division of the New
                        York Cotton Exchange, the U.S. Dollar Index initially comprised a geometrically weighted
                        average of ten currencies. Each currency represented a country considered a major trading
                        partner with the United States. Presently, the index consists of a geometrically weighted
                        average of six currencies: Euro, Yen, Pound, Canadian Dollar, Swedish Krona, and Swiss
                        Franc.</p>
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