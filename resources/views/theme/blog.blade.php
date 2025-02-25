@extends('theme.layout.master')

@section('content')
<!-- Banner Area Start -->
<div class="banner__three" style="padding-top: 150px; padding-bottom:90px;" data-background="{{ asset('assets/img/shape/banner-bg-3.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <ul>
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>{{ $blog->category }}</li>
                    </ul>
                    <h1>{{ $blog->category }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Single Blog Post Area Start -->
<div class="single-blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="single-blog-content">
                    <div class="single-blog-title">
                        <div class="single-blog-meta">
                            <ul>
                                <!--<li><i class="far fa-calendar"></i>{{ $blog->created_at->format('M d, Y') }}</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="single-blog-image">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <br>
                    <div class="single-blog-text">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Blog Post Area End -->
@endsection
