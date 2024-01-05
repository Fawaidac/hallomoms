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
                <h1 class="display-5 mb-5">Some Of Our Article</h1>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($article as $item)
                    <div class="col-lg-4 col-md-6 rounded portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded p-5">
                            <div class="testimonial-item">
                                <div>
                                    <h4>{{ $item->title }}</h4>
                                    <span class="text-xxs">{{ $item->updated_at->format('d F Y H:i:s') }}</span>
                                    <p class="fs-5"
                                        style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; font-size: 1.25rem !important;">
                                        {{ $item->description }}
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="{{ route('article.show', $item->id) }}"
                                        class="btn btn-primary mb-0 mt-0 fst-italic text-white">
                                        Read More >>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
