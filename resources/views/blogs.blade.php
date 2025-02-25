@extends('theme.layout.master')

@section('css')
<style>
    .responsive-image {
        width: 100%;
        height: auto;
    }

    @media only screen and (max-width: 768px) {
        .responsive-image {
            width: 100%;
        }
    }

    /* Horizontal Blog Slider Styles */
    .blog-slider {
        display: flex;
        overflow-x: auto;
        gap: 10px; /* Reduced gap between items */
        padding: 10px; /* Added padding for the entire slider */
    }

    .blog__three-item {
        flex-shrink: 0;
        width: 300px;
        border: 1px solid #ddd;
        padding: 10px; /* Reduced padding inside items */
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin: 0; /* Removed default margin */
    }

    .blog__three-item:hover {
        transform: translateY(-5px); /* Slight hover effect */
    }

    /* Hide default scrollbar */
    .blog-slider::-webkit-scrollbar {
        height: 8px;
    }

    .blog-slider::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }
</style>
@endsection

@section('content')
<!-- Page Banner -->
<div class="banner__three" style="padding-top: 150px; padding-bottom:90px;" data-background="assets/img/shape/banner-bg-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <ul>
                        <li><a href="/">Home</a><span>|</span></li>
                        <li>Blogs</li>
                    </ul>
                    <h1 class="text-center">Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Section -->
<div class="blog__three dark__image section-padding">
    <div class="container">
        <div class="row align-items-end mb-70">
            <div class="col-xl-12">
                <div class="blog__three-title t-center">
                    <span class="subtitle-three">From the blog</span>
                    <h2>News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="blog-slider">
            @foreach ($blogs as $blog)
                <div class="blog__three-item">
                    <div class="blog__three-item-image">
                        <a href="{{ route('blog.title', $blog->title) }}">
                            @if ($blog->image)
                                <img class="responsive-image" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="100">
                            @endif
                        </a>
                    </div>

                    <div class="blog__three-item-content">
                        <div class="blog__three-item-content-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-folder"></i>{{ $blog->category }}</a></li>
                            </ul>
                        </div>
                        <h4><a href="{{ route('blog.title', $blog->title) }}">{{ $blog->title }}</a></h4>
                        <div class="blog__three-item-content-btn">
                            <a class="simple-btn-1" href="{{ route('blog.title', $blog->title) }}">
                                Read More<i class="far fa-chevron-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
