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
        max-height: 512px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .card-body {
        padding: 20px;
        text-align: left;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #2c3e50;
    }

    .short-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
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
        background-color: #e88f25;
    }

    /* Carousel Controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        padding: 10px;
        width: 35px;
        height: 35px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        transform: translateY(-50%);
        width: 35px;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
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

    /* Center the carousel and card on the page */
    .carousel-container {
        display: flex;
        justify-content: center;
    }

    .carousel-inner {
        width: 100%;
    }

    /* Media Queries for Responsive Design */
    @media only screen and (max-width: 768px) {
        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.1rem;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 25px;
            height: 25px;
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
                        <li>Event's</li>
                    </ul>
                    <h1>Event's</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Right Column: Center the Carousel (Events) -->
        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
            <div id="eventCarousel" class="carousel slide carousel-container" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                        <div class="card mb-4">
                            <img src="assets/img/blog/{{ ($i % 4 == 1 ? 'award-2.jpeg' : ($i % 4 == 2 ? 'award-3.jpeg' : 'award-4.jpeg')) }}" class="responsive-image" alt="Award Image">
                            <div class="card-body">
                                <h5 class="card-title">CELEBRATING WORLD INVESTOR WEEK 2024 </h5>
                                <p class="card-text short-text" id="event-description-{{$i}}">
                                    Al Nafay Commodities hosted a seminar at Hailey College on "Celebrating World Investor Week 2024 with the Next Generation of Investors," in collaboration with PMEX. The seminar educated students on the intricacies of commodity trading, market trends, and effective investment strategies.
                                </p>
                                <a href="javascript:void(0)" class="btn readMoreBtn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Right Column: Center the Carousel (Events) -->
        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
            <div id="eventCarousel" class="carousel slide carousel-container" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                        <div class="card mb-4">
                            <img src="assets/img/blog/{{ ($i % 4 == 1 ? 'ACCA1.jpeg' : ($i % 4 == 2 ? 'ACCA2.jpeg' : 'ACCA3.jpeg')) }}" class="responsive-image" alt="Award Image">
                            <div class="card-body">
                                <h4 class="card-title">ACCA CONFEREANCE FAISALABAD</h4>
                                <p class="card-text short-text" id="event-description-{{$i}}">
                                AL Nafay commodities pvt (Ltd) in collaboration with PMEX participated in the ACCA Corporate Conference on 25th September 2024 in Faisalabad. The event brought together industry experts to discuss changing business trends. A keynote discussion highlighted strategies for overcoming challenges through innovation. AL NAFAY COMMODITIES is committed to promoting such knowledge sharing opportunities..
                                </p>
                                <a href="javascript:void(0)" class="btn readMoreBtn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Right Column: Center the Carousel (Events) -->
        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
            <div id="eventCarousel" class="carousel slide carousel-container" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                        <div class="card mb-4">
                            <img src="assets/img/blog/{{ ($i % 4 == 1 ? 'TSMUN-1 (2).jpeg' : ($i % 4 == 2 ? 'TSMUN-2 (3).jpeg' : 'TSMUN-3 (1).jpeg')) }}" class="responsive-image" alt="Award Image">
                            <div class="card-body">
                                <h4 class="card-title">TS'MUN Event </h4>
                                <p class="card-text short-text" id="event-description-{{$i}}">
                                An amazing day at LGS with lots of growth, learning, and opportunity! Grateful for the warm welcome and engaging discussions that made this event truly memorable.
                                </p>
                                <a href="javascript:void(0)" class="btn readMoreBtn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
