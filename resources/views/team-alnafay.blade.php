@extends('theme.layout.master')

@section('css')
<style>
    .responsive-image {
        width: 100%;
        height: auto;
    }

    .card-custom {
        width: 100%;
        max-width: 350px;
        margin: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-5px);
    }

    .card img {
        border-radius: 10px 10px 0 0;
        object-fit: cover;
        height: auto;
        width: 100%;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        transition: all 0.3s ease;
    }

    .card-body:hover .card-text {
        -webkit-line-clamp: unset;
        overflow: visible;
    }

    .card-row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* Responsive Design Tweaks */
    @media (max-width: 768px) {
        .card-custom {
            max-width: 100%;
        }

        .card-title {
            font-size: 1.25rem;
        }
    }
</style>
@endsection

@section('content')

<!-- Banner Section -->
<div class="banner__three" style="padding-top: 150px; padding-bottom:90px;" data-background="assets/img/shape/banner-bg-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <h1 class="text-center">Alnafay Team</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card Section -->
<div class="container mt-5 mb-5">
    <div class="row card-row">
        <!-- First Card -->
        <div class="card card-custom">
            <img src="{{ asset('assets/img/blog/inshara.jpeg') }}" class="responsive-image" alt="Chair Person Image">
            <div class="card-body">
                <h6>Chair Person</h6>
                <h3 class="card-title">Ms. Insharah Afnan</h3>
                <p class="card-text">
                Ms. Insharah Afnan is the chairperson of Al Nafay Commodities (Pvt) Ltd. Her vision is to promote sustainable business practices. Through her leadership, she has elevated the company to new heights, focusing on quality and customer satisfaction. Her dedication and hard work have established a distinct identity for the company in the market.
                    <span class="additional-content"> She is committed to fostering sustainable business practices.</span>
                </p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="card card-custom">
            <img src="{{ asset('assets/img/blog/CEO.jpeg') }}" class="responsive-image" alt="CEO Image">
            <div class="card-body">
                <h6>CEO</h6>
                <h3 class="card-title">Mr. Mazhar Hussain</h3>
                <p class="card-text">
                    Mr. Mazhar Hussain, the CEO of Al-Nafay Commodities (Pvt) Ltd., is a seasoned leader .
                    <span class="additional-content"> His strategic leadership has driven the company forward.</span>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
