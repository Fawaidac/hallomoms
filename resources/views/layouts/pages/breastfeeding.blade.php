@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Breastfeeding</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Breastfeeding</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <h1 class="display-5 mb-5">Video to take care of your breasts to keep them healthy</h1>
        <div class="container">
            @foreach ($bf as $item)
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="fw-bold text-black mt-5">{{ $item->title }}</h4>
                    <p class="mb-4">{{ $item->description }}</p>
                    @php
                        $videoHtml = $item->getVideo($item->link);
                        if ($videoHtml) {
                            echo $videoHtml;
                        }
                    @endphp
                </div>
            @endforeach
        </div>
    </div>
@endsection
