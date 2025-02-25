@extends('theme.layout.master')

@section('css')
    <style>
        .pdf-download-page {
            padding: 80px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .pdf-download-page h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .pdf-download-page p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .pdf-download-link {
            background-color: #fff;
            padding: 15px 30px;
            border-radius: 5px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 1.1rem;
            color: #ff6600;
            font-weight: 600;
            border: 1px solid #ddd;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 400px;
            margin: 0 auto;
        }

        .pdf-download-link i {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .pdf-download-link {
                font-size: 1rem;
                padding: 10px 20px;
            }

            .pdf-download-link i {
                font-size: 1.2rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="banner__three" style="padding-top: 150px; padding-bottom: 90px;"
        data-background="assets/img/shape/banner-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a><span>|</span></li>
                            <li>Investor Complaint Form</li>
                        </ul>
                        <h1>Download Investor Complaint Form</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pdf-download-page">
        <div class="container">
            <h2>Download Investor Complaint Form</h2>
            <p>Download and read the Investor Complaint Form provided by PMEX for all corporate members of Pakistan Mercantile Exchange.</p>

            <!-- PDF Download Link -->
            <a href="{{ asset('assets/pdf/Investor-Complaint-Form.pdf') }}" class="pdf-download-link" download>
                <i class="far fa-file-pdf"></i>
                Investor Complaint Form
            </a>
        </div>
    </div>
@endsection
