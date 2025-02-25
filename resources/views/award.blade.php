@extends('theme.layout.master')

@section('css')
<style>
    body {
        font-family: 'Arial', sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .responsive-image {
        width: 100%;
        height: auto;
        max-height: 450px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-body {
        padding: 20px;
        text-align: left;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: #2c3e50;
    }

    .short-text {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 15px;
    }

    .readMoreBtn {
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px 20px;
        font-size: 0.9rem;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .readMoreBtn:hover {
        background-color: #0056b3;
    }

    .banner__three {
        padding: 150px 0 90px;
        background: url('assets/img/shape/banner-bg-3.jpg') no-repeat center center;
        background-size: cover;
        text-align: center;
    }

    .banner__three h1 {
        color: #e88f25;
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .page__banner-content ul {
        display: inline-flex;
        list-style: none;
        padding: 0;
        margin-bottom: 15px;
    }

    .page__banner-content ul li {
        color: #e88f25;
        font-size: 1rem;
    }

    .page__banner-content ul li a {
        color: #e88f25;
        text-decoration: none;
        font-weight: 600;
    }

    .page__banner-content ul li span {
        color: #e88f25;
        margin: 0 5px;
    }

    /* Center the card on the page */
    .card-container {
        display: flex;
        justify-content: center;
    }

    /* Responsive design for smaller screens */
    @media only screen and (max-width: 768px) {
        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.1rem;
        }
    }
</style>
@endsection

@section('content')
<div class="banner__three">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <ul>
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>Awards</li>
                    </ul>
                    <h1>Awards</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row card-container">
        <!-- Single Card: Centered -->
        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
            <div class="card h-100">
                <img src="assets/img/blog/awards-1.jpeg" class="card-img-top responsive-image" alt="Award Image">
                <div class="card-body">
                    <h5 class="card-title">Awards</h5>
                    <p class="card-text short-text">
                    Al-Nafay Commodities is proud to be recognized as the Top Emerging Broker by PMEX. We are especially delighted to have achieved this prestigious award in a short period of time, a testament to our rapid success and strategic excellence. Being among PMEX’s top emerging brokers so quickly reflects our unwavering commitment to growth, innovation, and providing exceptional trading solutions. Our dedicated team’s hard work and visionary approach have positioned us as leaders in the commodities market, empowering clients with top-tier services and reliable market insights.
                    </p>
                    <a href="javascript:void(0)" class="btn readMoreBtn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).on('click', '.readMoreBtn', function() {
        var description = $(this).closest('.card-body').find('p');
        var isShortText = description.hasClass('short-text');

        if (isShortText) {
            description.removeClass('short-text');
            $(this).text('Show Less');
        } else {
            description.addClass('short-text');
            $(this).text('Read More');
        }
    });
</script>
@endsection
