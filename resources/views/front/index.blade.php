@extends('front.mainpage')

@push('styles')
<style>
.card{
margin: 5% 0%;
transition: transform .5s, box-shadow 1s;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
text-align: center;
}
.card:hover {
transform: scale(1.02) perspective(0px);
/* box-shadow: 0 10px 10px rgba(255,0,0,.7); */
}
.card-body{
margin: 0% 0% 0% 3%;
padding: 6% 0%;
}

@media (max-width: 767.98px) {
    article img{
    width: 80% !important;
    margin: auto !important;
}



        }




        @media screen and (max-width: 1200px) {
            article img{
    width: 80% !important;
    margin: auto !important;
}

        }
</style>
@endpush

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid orangeback page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
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

    <div class="blog">
    <div class="container ">
      <div class="row ">
        {{-- <div class="col-8"></div> --}}
        <div class="col-12 col-lg-8" style="display: flex;justify-content:center;width:100%;align-items:center;">
            <div class="" style="display: flex;justify-content:center;width:100%;align-items:center;">
    <form class="form-inline d-flex" action="{{ route('search') }}" method="POST">
        @csrf
        <input class="form-control " name="find" type="search" placeholder="Search"
            aria-label="Search">
        <button class="mybtn btn-outline-primary mx-2 m-2" type="submit">Search</button>
    </form>
</div>
</div>
</div>
</div>
    @foreach ($articles as $article)
    <div class="container " >
        <article style="text-align: center;">
            <h1>{{ $article->title }}</h1>
            <h6>{{ $article->created_at }} </h6>
            <h6><span class="badge badge-secondary"><a
                        href="{{ route('category', ['id' => $article->category_id]) }}">{{ $article->name }}</a></span></h6>
            <img src="{{ asset($article->img) }}" alt="this is hack img" width="200vh" height="200vh">
            <p class="lead">{{ $article->title }}</p>
            <div class="mt-3 pt-3">

                <a id="indexpage" class="mybtn btn-primary" href="{{ route('article', ['id' => $article->id]) }}">Read More</a>

            </div>
            <hr>
        </article>
    </div>
    @endforeach
</div>
    <br>
    {{-- <div class="mt-3 pt-3 text-center">
        <a class="btn btn-primary" href="{{ route('home') }}">Return to Profile</a>
    </div> --}}
    <br>
    <br>
@endsection
