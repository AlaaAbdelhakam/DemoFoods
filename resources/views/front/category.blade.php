@extends('front.mainpage')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">BLOG</h1>
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

    @foreach ($articles as $article)
    <div class="container">
    <article style="text-align: center;">
        <h1>{{ $article->title }}</h1>
        <h6> {{ $article->created_at }} </h6>
        <img src="{{ asset($article->img) }}" alt="this is hack img" width="550" height="550">
        <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est totam, inventore, neque voluptate hic illo eius, exercitationem nesciunt atque doloribus et suscipit reprehenderit quasi quae numquam esse distinctio ullam!</p> -->
        <div class="mt-3 pt-3">
            <a class="mybtn btn-primary" href="{{ route('article', ['id' => $article->id]) }}">Read More</a>
        </div>
        <hr>
    </article>
    </div>
@endforeach

@endsection
