@extends('theme.layout.master')
@section('content')
    <div class="banner__three" style="padding-top: 150px; padding-bottom:90px;"
        data-background="assets/img/shape/banner-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <ul>
                            <li><a href="">Home</a><span>|</span></li>
                            <li>Contact US</li>
                        </ul>
                        <h1>Contact US</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area Start -->
    <div class="contact__three pb-0 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 lg-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="assets/img/icon/call.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Contact Us</h4>
                            <p><a href="tel:+04235198074">0423 519 8074</a></p>
                            <p><a href="tel:+923009267854">+92 300 9267854</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 md-mb-30">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="assets/img/icon/email.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Quick Email</h4>
                            <p><a href="mailto:support@alnafaycommodities.com">support@alnafaycommodities.com</a></p>
                            <p><a href="mailto:support@alnafaycommodities.com">info@alnafaycommodities.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="assets/img/icon/locations.png" alt="">
                        </div>
                        <div class="contact__three-info-content">
                            <h4>Office Location</h4>
                            <p>249-C Main Boulevard PIA Housing Society Lahore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
    <!-- Contact Form Area Start -->
    <div class="contact__three section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="contact__three-left mr-40 xl-mr-0">
                        <div class="contact__three-left-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3403.7429663864423!2d74.28032387560867!3d31.448742374246905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDI2JzU1LjUiTiA3NMKwMTYnNTguNCJF!5e0!3m2!1sen!2s!4v1725750530308!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact__three-righ">
                        <div class="contact__three-right-title">
                            <span class="subtitle-one">Request a call Back</span>
                            <h2 class="mb-30">Contact Us for Consultation</h2>
                        </div>
                        <div class="contact__three-right-form">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-user"></span>
                                            <input type="text" name="name" placeholder="Full Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 md-mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-envelope-open"></span>
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="fal fa-book"></span>
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-30">
                                        <div class="contact__two-right-form-item conbix-contact-item">
                                            <span class="far fa-comments"></span>
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact__two-right-form-item">
                                            <button class="btn-one" type="submit">Submit Message <i
                                                    class="far fa-chevron-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script type="text/javascript">
            $(document).ready(function() {
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'Okay'
                });
            });
        </script>
    @endif
@endsection
