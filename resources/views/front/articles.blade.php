@extends('front.mainpage')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $article->title }} BLOG</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->



    <article style="text-align: center;">
        <h1>{{ $article->title }}</h1>
        <h6>{{ $article->created_at }} </h6>
        <h6><span class="badge badge-secondary"><a
                    href="{{ route('category', ['id' => $article->category_id]) }}">{{ $article->name }}</a></span></h6>
        <img src="{{ asset($article->img) }}" alt="this is hack img" width="550" height="550">
        {{-- <hr> --}}
        <div class="container">
        <p class="lead pt-5" style="color: black;">
            {{ $article->content }}
        </p>
    </div>

    </article>

    @endsection
