@extends('layouts.app')

@section('content')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Detail Article</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Article</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xl py-5">
        <h1>{{ $article->title }}</h1>
        <span class="text-xxs">{{ $article->updated_at->format('d F Y H:i:s') }}</span>
        <div class="col-md-5">
            <p class="mt-3">{{ $article->description }}</p>
        </div>
    </div>
@endsection
