@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Article</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Article</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Article</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            {{-- <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div> --}}
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded p-5">
                        <div class="testimonial-item">
                            <h4>Client Name</h4>
                            <span>Profession</span>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                erat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <div class="portfolio-inner rounded p-5">
                            <div class="testimonial-item">
                                <h4>Client Name</h4>
                                <span>Profession</span>
                                <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                    dolore
                                    lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor
                                    erat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
