<!DOCTYPE html>
<html lang="en">

<head>
    <title>Life Coach - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/owl.theme.default.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/css/magnific-popup.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/style2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage/css/style3.css') }}">



    <!-- <link rel="stylesheet" href="css/ionicons.min.css"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}

    <style>
        @media screen and (max-width: 1200px) {

            html,
            body {
                /* width: 100% !important;
            height: 100% !important; */
                margin: 0px !important;
                padding: 0px !important;
                overflow-x: hidden !important;
            }

        }

        body {
            zoom: 82% !important;

        }

        html,
        body {
            /* width: 100% !important;
            height: 100% !important; */
            margin: 0px !important;
            padding: 0px !important;
            overflow-x: hidden !important;
        }

        .ftco-section {
            visibility: visible !important;

        }

        .nav-item,
        .dropdown a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }

        .nav-item,
        .nav-link a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }

        .navbar-nav a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }

        a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }

        .topphone {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
        }

        .collapse,
        .navbar-collapse {
            flex-basis: auto !important;
        }

        .navbar-nav>li {
            padding-left: 0px !important;
            padding-right: 0px !important;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }
    </style>
</head>

<body>
    <script src="{{ asset('mainpage/wow.js') }}" type="text/javascript"></script>

    <script>
        new WOW().init();
    </script>
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;color: #234b91;"></div>
    </div> --}}
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"
            style="width: 3rem; height: 3rem;color: #234b91 !important;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid px-0" style="background-color:#234b91;">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span style="font-size: 1rem;
				font-weight: 400;">Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i style="font-size: 1rem;"
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="font-size: 1rem;"
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="font-size: 1rem;"
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i style="font-size: 1rem;"
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div style="background-color: #EDDD5E;"
                    class="h-100 topphone d-inline-flex align-items-center text-dark py-2 px-4">
                    <span style="font-size: 1rem;color: #234b91;" class="me-2 fw-semi-bold"><i style="color: #234b91;"
                            class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span style="font-size: 1rem;color: #234b91;">+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start font-style: italic;-->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"
                style="font-family:Libre Baskerville,serif;color: #234b91;font-weight:bolder;font-size:39px;  text-transform: capitalize;">
                Jawhara
                Foods</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto  ">
                <a href="{{ route('welcome') }}" style="color: #234b91;" class="nav-item nav-link active">Home</a>
                <!-- <a href="about.html" style="color: #234b91;" class="nav-item nav-link">About</a> -->
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" style="color: #234b91;" class="dropdown-item">Our Story</a>
                        <a href="feature.html" style="color: #234b91;" class="dropdown-item">press</a>
                        <a href="team.html" style="color: #234b91;" class="dropdown-item">FAQ</a>
                        <a href="testimonial.html" style="color: #234b91;" class="dropdown-item">Certificates</a>
                        <a href="{{ route('contactus') }}" style="color: #234b91;" class="dropdown-item">Contact
                            Us</a>
                    </div>
                </div>
                <!-- <a href="service.html" style="color: #234b91;" class="nav-item nav-link">Services</a> -->
                <!-- <a href="product.html" style="color: #234b91;" class="nav-item nav-link">Products</a> -->
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;" class="dropdown-item">Pickled
                            Peppers</a>
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;" class="dropdown-item">Pickled
                            Olives</a>
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;" class="dropdown-item">Pickled
                            Artichokes</a>
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;" class="dropdown-item">Pepper
                            Paste</a>
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;" class="dropdown-item">Roasted
                            Peppers</a>
                        <a href="{{ route('singleproduct') }}" style="color: #234b91;"
                            class="dropdown-item">Banderillas</a>
                    </div>
                </div>
                <a href="{{ route('contactus') }}" style="color: #234b91;" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> --}}
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url('{{ asset('mainpage/images/bg_1.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2 style="color: #234b91;">We are your personal life coach</h2>
                                <h1 class="mb-4">Discover the secrets of life</h1>
                                <!-- <p><a href="#" style="color: #234b91;" class="btn btn-white">Connect with us</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url('{{ asset('mainpage/images/bg_2.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2 style="color: #234b91;">Improving the world</h2>
                                <h1 class="mb-4">Restart your career to be successful</h1>
                                <!-- <h1 ><a href="#" style="color: #234b91;font-weight:bolder;"
       class="btn btn-white">Connect with us</a></h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
 <div class="overlay"></div>
 <div class="container">
 <div class="row no-gutters slider-text align-items-center justify-content-center">
  <div class="col-md-10 ftco-animate">
  <div class="text w-100 text-center">
  <h2>Welcome to lifecoach</h2>
   <h1 class="mb-4">We help to reach your goals</h1>
   <p><a href="#" class="btn btn-white">Connect with us</a></p>
  </div>
  </div>
  </div>
 </div>
 </div>
 </div> -->
        </div>


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('mainpage/images/bg_1.jpg') }}" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('mainpage/images/bg_2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                {{-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div> --}}
            </div>
        </div>




        <section class="ftco-section" style="visibility: visible;">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3" style="visibility: visible;">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <span class="subheading">Featured Products Categories</span>
                        <h2 class="mb-4" style="color: #234b91;">Our Products</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-1.jpg') }}" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">pickled Peppers</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                                class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-2.jpg') }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Pickeled Olives</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-3.jpg') }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Pickled Artichokes</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-4.jpg') }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Pepper Paste</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6"></div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-5.jpg') }}" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Roasted Peppers</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                                class="price-sale">$80.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('mainpage/images/product-6.jpg') }}" alt="Colorlib Template">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">Banderillas</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>$120.00</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="#"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </a>
                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="fas fa-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"></div>

                    <!-- <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
 <div class="overlay"></div>
 </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Carrots</a></h3>
    <div class="d-flex">
    <div class="pricing">
  <p class="price"><span>$120.00</span></p>
  </div>
 </div>
    <div class="bottom-area d-flex px-3">
 <div class="m-auto d-flex">
 <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
 <span><i class="fa fa-bars" aria-hidden="true"></i></span>
 </a>
 <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
 <span><i class="fas fa-shopping-cart"></i></span>
 </a>
 <a href="#" class="heart d-flex justify-content-center align-items-center ">
 <span><i class="fas fa-heart"></i></span>
 </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
    <div class="overlay"></div>
    </a>
    <div class="text py-3 pb-4 px-3 text-center">
    <h3><a href="#">Fruit Juice</a></h3>
    <div class="d-flex">
    <div class="pricing">
  <p class="price"><span>$120.00</span></p>
  </div>
 </div>
    <div class="bottom-area d-flex px-3">
 <div class="m-auto d-flex">
 <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
 <span><i class="fa fa-bars" aria-hidden="true"></i></span>
 </a>
 <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
 <span><i class="fas fa-shopping-cart"></i></span>
 </a>
 <a href="#" class="heart d-flex justify-content-center align-items-center ">
 <span><i class="fas fa-heart"></i></span>
 </a>
    </div>
    </div>
    </div>
    </div>
    </div> -->
                </div>
            </div>
        </section>

















        <footer class="footer" style="background-color: #234b91;">
            <div class="container-fluid px-lg-5">
                <div class="row">
                    <div class="col-md-9 py-5">
                        <div class="row">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading">About us</h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                                <ul class="ftco-footer-social p-0">
                                    <li class="ftco-animate"><a href="#" data-toggle="tooltip"
                                            data-placement="top" title="Twitter"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" data-toggle="tooltip"
                                            data-placement="top" title="Facebook"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" data-toggle="tooltip"
                                            data-placement="top" title="Instagram"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 col-lg-10">
                                        <div class="row">
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Courses</h2>
                                                <ul class="list-unstyled">
                                                    <li><a href="#" class="py-1 d-block">Painting</a></li>
                                                    <li><a href="#" class="py-1 d-block">Sketch</a></li>
                                                    <li><a href="#" class="py-1 d-block">Drawing</a></li>
                                                    <li><a href="#" class="py-1 d-block">Sculpture</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Topics</h2>
                                                <ul class="list-unstyled">
                                                    <li><a href="#" class="py-1 d-block">Accreditation</a></li>
                                                    <li><a href="#" class="py-1 d-block">Disclosure</a></li>
                                                    <li><a href="#" class="py-1 d-block">Student Code</a></li>
                                                    <li><a href="#" class="py-1 d-block">Job Opportunities</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 mb-md-0 mb-4">
                                                <h2 class="footer-heading">Resources</h2>
                                                <ul class="list-unstyled">
                                                    <li><a href="#" class="py-1 d-block">Security</a></li>
                                                    <li><a href="#" class="py-1 d-block">Global</a></li>
                                                    <li><a href="#" class="py-1 d-block">Charts</a></li>
                                                    <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-md-5">
                            <div class="col-md-12">
                                <p class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib.com</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5" style="background-color: #234b91;">
                        <h2 class="footer-heading">Free consultation</h2>
                        <form action="#" class="form-consultation">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control submit px-3">Send A Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
            </svg></div>
        <script src="{{ asset('mainpage/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery-migrate-3.0.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery.stellar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery.animateNumber.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/owl.carousel.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/scrollax.min.js') }}" type="text/javascript"></script>

        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
        {{-- <script src="{{ asset('mainpage/js/google-map.js') }}" type="text/javascript"></script> --}}
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="{{ asset('mainpage/js/main.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/js/main2.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mainpage/wow.min.js') }}" type="text/javascript"></script>


</body>

</html>
