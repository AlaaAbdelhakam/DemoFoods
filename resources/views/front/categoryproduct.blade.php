@extends('front.mainpage')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid orangeback page-header  mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown ">Category Products</h1>
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

    <section  class="portfolio categorybody text-center category">

    <div class="section-title">
        <h2 style="color: #234b91;" class="m-1">{{ $title }} Category</h2>
        <h3>Check our <span style="color: #234b91;">{{ $title }}</span></h3>
        {{-- <p style="color: #234b91;">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci
            expedita at voluptas atque
            vitae autem.</p> --}}
    </div>

    {{-- <h4 class="text-center" style="color: #234b91">{{ $title }}</h4> --}}
    <br>
    <br>
    <div class="container">

        <!-- Card deck -->
        <div class="card-deck row">
            @foreach($category->Jawharacproduct->chunk(4) as $chunk)
    {{-- <div class="card-group" > --}}
        @foreach($chunk as $post)
        <div class="col-xs-12 col-sm-6 col-md-4 mt-4 col-lg-4">
              <a href="">
          <!-- Card -->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img class="card-img-top" src="{{ asset($post->image) }}" style="max-height: 280px;min-height:280px;" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title" style="color: #234b91">{{ $post->title }}</h4>
              <!--Text-->
              <p class="card-text" style="color: #234b91">{{ $post->description }}</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <a href="{{ route('singleproduct', $post->id) }}" class="btn-base btn-light-blue btn-md" style="color: #234b91;">Read more</a>

            </div>

          </div>
          <!-- Card -->
        </a>
          </div>
          @endforeach
          {{-- </div> --}}
          @endforeach
        </div>
    </div>
</section>
@endsection
