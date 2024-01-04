<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Demo Foods</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    {{-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('mainpage->first()/css/animate.css') }}">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsGallery/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsGallery/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsGallery/css/style.css') }}" rel="stylesheet">








    {{-- 
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsMainImage/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsMainImage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsMainImage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsMainImage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsMainImage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsMainImage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsMainImage/css/style.css') }}" rel="stylesheet">











    <!-- Libraries Stylesheet -->
    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->

    <style>
        .mybtn-link::before {
            /* Your styles for the ::before pseudo-element here */
            content: "\f105";
            /* This is required for the pseudo-element */
            position: relative;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 10px;
            /* This creates a circular shape, adjust as needed */
        }

        /* Basic styles for btn class */
        .mybtn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /* Styles for btn-link class */
        .mybtn-link {
            font-weight: 400;
            color: #007bff;
            background-color: transparent;
            border: none;
        }

        .mybtn-link:hover {
            color: #0056b3;
            text-decoration: underline !important;
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary {
            /* Your styles for the .btn.btn-warning combination here */
            color: #212529 !important;
            /* Adjust text color as needed */
            background-color: #EDDD5E !important;
            /* Adjust background color for the warning style */
            border-color: #EDDD5E !important;
            /* Adjust border color for the warning style */
        }

        /* .navbar-nav {
            background-color: white !important;
        }

        .upperpage {
            zoom: 86% !important;

        }

        .carousel-item,.carousel-inner,#heroCarousel,.hero-container,#hero {
            max-height:540px !important;
            background-position: center !important;
            background-size: cover !important;
        }

        .navbar {
            zoom: 62% !important;
            font-size: xx-large !important;
        }

        #navbarCollapse {
            zoom: 130% !important;

        } */

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #EDDD5E !important;
            /* opacity: 1; Firefox */
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #EDDD5E !important;
            /* opacity: 1; Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #EDDD5E !important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #EDDD5E !important;
        }

        .form-control {
            color: #EDDD5E !important;

        }

        .form-floating {
            color: #EDDD5E !important;

        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            color: #EDDD5E !important;

        }

        .last-input {
            color: #EDDD5E !important;

        }

        .last-input::placeholder {
            color: #EDDD5E !important;
        }

        .last-input:-ms-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #EDDD5E !important;
        }

        .last-input::-ms-input-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #EDDD5E !important;

        }


        .footer .aside-stretch-right {
            background: #333333;
        }

        .footer .aside-stretch-right:after {
            background: #234b91;
        }

        @media (max-width: 767.98px) {
            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
        }



        .aside-stretch-right,
        .copyright {
            background: #EDDD5E;
        }

        .aside-stretch-right:after {
            display: flex !important;
            align-items: flex-start !important;

            content: '';
            width: 360%;
            background: #EDDD5E;
        }

        @media (max-width: 767.98px) {
            .aside-stretch-right {
                background: transparent;
            }

            .aside-stretch-right:after {
                background: transparent;
                display: none;
            }
        }



        .footer-heading {
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 600;
            color: white;
        }

        .form-consultation {
            width: 100%;
        }


        .form-consultation .form-control {
            height: 44px !important;
            background: rgba(255, 255, 255, 0.1) !important;
            color: #EDDD5E !important;
            font-size: 14px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: none;
        }




        .form-consultation .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: rgba(255, 255, 255, 0.3) !important;
        }


        .form-consultation .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: rgba(255, 255, 255, 0.3) !important;
        }




        .form-consultation .form-control:-ms-input-placeholder {
            /* IE 1255+ */
            color: rgba(255, 255, 255, 0.3) !important;
        }



        .form-consultation .form-control:focus {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }



        .form-consultation .form-control:focus,
        .footer .form-consultation .form-control:active {
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }


        .form-consultation .submit {
            background: #EDDD5E !important;
            color: #234b91 !important;
            font-weight: bold
        }



        .form-consultation textarea.form-control {
            height: inherit !important;
        }




        .form-group {
            margin-bottom: 1rem;
        }


        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
        }


        .form-group input {
            padding-right: 50px;
            font-size: 14px;
        }






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

        #portfolio {
            zoom: 86% !important;

        }

        .footer {
            zoom: 86% !important;

        }

        .copyright {
            zoom: 86% !important;

        }

        .middlecontact {
            visibility: visible !important;

            width: 85% !important;
            height: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .midllecontent {
            width: 85% !important;
            height: 100% !important;
            margin: auto !important;
        }

        html,
        body {
            /* width: 100% !important;
            height: 100% !important; */
            margin: 0px !important;
            padding: 0px !important;
            overflow-x: hidden !important;

        }

        .footer {
            visibility: visible !important;

        }

        .topphone {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
            background: #EDDD5E !important;

        }

        .btn-get-started {
            font-family: Georgia, 'Times New Roman', Times, serif !important;
        }

        .lowerfooter a ul,
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
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"
            style="width: 3rem; height: 3rem;color: #234b91 !important;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    {{-- <div class="upperpage">
        <div class="container-fluid px-0" style="background-color: #234b91;">
            <div class="row g-0 d-none d-lg-flex">
                <div class="col-lg-6 ps-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center text-light">
                        <span style="color: white;">Follow Us:</span>
                        <a class="btn btn-link text-light" href=""><i style="color: white;"
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="color: white;"
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="color: white;"
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="color: white;"
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                        <span class="me-2 fw-semi-bold" style="color: #234b91;"><i class="fa fa-phone-alt me-2"></i>Call
                            Us:</span>
                        <span style="color: #234b91;">+2010 906 85674</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
    </div>


    
    <!-- Navbar Start -->
    <nav style="height: 130px;" class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0" style="color: #234b91;font-size:58px;">Jawhara</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link px-0"
                    style="color: #234b91;font-size:20px;font-weight:500;">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle px-0"
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
                {{-- <a href="service.html" class="nav-item nav-link" style="color: #234b91;">Services</a>
            <a href="product.html" class="nav-item nav-link" style="color: #234b91;">Products</a> --}}
    {{-- <div class="nav-item dropdown">
                    <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">Products Categories</a>
                    <div class="dropdown-menu bg-light m-0">
                        @foreach ($categories as $post)

                        <a href="{{ route('categoryproducts', $post->id) }}" style="color: #234b91;" class="dropdown-item">{{ $post->title }}</a>

                        @endforeach
                    </div>
                </div>
                <a href="{{ route('contactus') }}" class="nav-item nav-link active" style="color: #234b91;">Contact</a>
            </div> --}}
    {{-- <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div> --}}
    {{-- </div>
    </nav>  --}}

    <!-- ======= Hero Section ======= -->

    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url({{ asset($mainpage->first()->img_first) }});background-size: 100% 100%;">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    {{ $mainpage->first()->main_page_title_first }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $mainpage->first()->slogan_first }}
                                </p>
                                <a href="#portfolio"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    style="background-color: #234b91;font-family:Georgia, 'Times New Roman', Times, serif;">Our
                                    Products</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style="background-image: url({{ asset($mainpage->first()->img_second) }});background-size: 100% 100%;">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    {{ $mainpage->first()->main_page_title_second }}</h2>
                                <p class="animate__animated animate__fadeInUp w-100">
                                    {{ $mainpage->first()->slogan_second }}
                                </p>
                                <a href="https://online.fliphtml5.com/doov/ooeo/"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    style="background-color: #234b91;font-family:Georgia, 'Times New Roman', Times, serif;">Our
                                    Catalog</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item"
                        style="background-image: url({{ asset($mainpage->first()->img_third) }});background-size: 100% 100%;">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">
                                    {{ $mainpage->first()->main_page_title_third }}</h2>
                                <p class="animate__animated animate__fadeInUp w-100">
                                    {{ $mainpage->first()->slogan_third }}
                                </p>
                                <a href="{{ route('contactus') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    style="background-color: #234b91;font-family:Georgia, 'Times New Roman', Times, serif;">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->








    <!-- Topbar Start -->
    {{-- <div class="container-fluid px-0" style="background-color: #234b91;">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100  topphone d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold" style="color: #234b91;"><i class="fa fa-phone-alt me-2"></i>Call
                        Us:</span>
                    <span style="color: #234b91;">+012 345 6789</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    {{-- <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0" style="color: #234b91;">Jawhara</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link" style="color: #234b91;">Home</a>
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
                </div> --}}
    {{-- <a href="service.html" class="nav-item nav-link" style="color: #234b91;">Services</a>
                <a href="product.html" class="nav-item nav-link" style="color: #234b91;">Products</a> --}}
    {{-- <div class="nav-item dropdown">
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
                <a href="contact.html" class="nav-item nav-link active" style="color: #234b91;">Contact</a>
            </div> --}}
    {{-- <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> --}}
    {{-- </div>
    </nav> --}}


    {{-- old preview --}}

    {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('mainpage->first()/images/bg_1.jpg') }}"
                    style="max-height:625px;background-size:contain;background-position: center;"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('mainpage->first()/images/bg_2.jpg') }}"
                    style="max-height:625px;background-size:contain;background-position: center;"
                    class="d-block w-100" alt="...">
            </div> --}}
    {{-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> --}}
    {{-- </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}


    {{-- end of past preview --}}





    <!-- Page Header Start -->
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('mainpage->first()/images/bg_1.jpg') }}" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="{{ asset('mainpage->first()/images/bg_2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          {{-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> --}}
    {{-- </div>
      </div> --}}
    <!-- Page Header End -->
    {{-- <div style="width: 100%;height:100%;display:flex;justify-content:center;align-items:center;" class=" mt-3">
        <div class="container m-4">
            <div class="row justify-content-center mb-3 pb-3" style="visibility: visible;">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Featured Products Categories</span>
                    <h2 class="mb-4" style="color: #234b91;">Our Products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2
                    row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">pickled Peppers</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pickeled Olives</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pickled Artichokes</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pepper Paste</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Roasted Peppers</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-12 text-center">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Banderillas</h5>
                                    <p class="card-text">
                                        Therefore Algorithm refers to a sequence of finite steps to solve a particular
                                        problem.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Last updated now
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @include('sweetalert::alert')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio"
        style="width:100%;height:100%;justify-content:center;align-items:center;">
        <div id="products" class="container" data-aos="fade-up"
            style="width:100%;height:100%;justify-content:center;align-items:center;">

            <div class="section-title" style="width:100%;height:100%;justify-content:center;align-items:center;">
                <h2 style="color: #234b91;">Portfolio</h2>
                <h3>Check our <span style="color: #234b91;">Products</span></h3>
                <p style="color: #234b91;">We are your source for responsibly and traditionally crafted olives and
                    ingredients. Through the hands of our growers we create great tasting that nurture community and
                    enhance your quality of life.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active" style="color: #234b91;">All</li>
                        @foreach ($categories as $post)
                            <li data-filter=".{{ $post->id }}" style="color: #234b91;">{{ $post->title }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($categories as $post)
                    <a href="{{ route('categoryproducts', $post->id) }}">
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $post->id }}">
                            <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4 style="color: #234b91;">{{ $post->title }}</h4>
                                <p>{{ $post->description }}</p>
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>

        </div>
    </section>

    <!-- Contact End -->
    <br>
    <br>
    <br>

    <div style="width: 100%;display:flex;justify-content:center;">
        @if (isset($pdfPath))
            <a href="{{ route('pdf.download') }}" class="btn-base btn-primary shadow-0 p-3 text-center"
                target="_blank">DOWNLOAD OUR CATALOG </a>
        @endif

    </div>










    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #234b91;color: white;visibility: visible;">
        <div class=" bottomfooter py-5">
            <div class="row lowerfooter g-5">
                <div class="col-lg-1 "></div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>6th October, Cairo, Egypt</p>
                    <p class="mb-2"><i class="fas fa-building me-3"></i>+2012 745 46598</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+2012 745 46598</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3" style="font-size:x-large;"></i>+2012 745 46598
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Demo@example.com</p>
                    <div class="d-flex pt-3">
                        <a style="background-color:#EDDD5E" class="btn btn-square btn-secondary rounded-circle me-2"
                            href=""><i style="color: #234b91;" class="fab fa-twitter"></i></a>
                        <a style="background-color:#EDDD5E" class="btn btn-square btn-secondary rounded-circle me-2"
                            href=""><i style="color: #234b91;" class="fab fa-facebook-f"></i></a>
                        <a style="background-color:#EDDD5E" class="btn btn-square btn-secondary rounded-circle me-2"
                            href=""><i style="color: #234b91;" class="fab fa-youtube"></i></a>
                        <a style="background-color:#EDDD5E" class="btn btn-square btn-secondary rounded-circle me-2"
                            href=""><i style="color: #234b91;" class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                {{-- <div class="col-lg-1"></div> --}}

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="" style="color: white;text-decoration:none;">About Us</a>
                    <a class="btn btn-link" href="{{ route('contactus') }}"
                        style="color: white;text-decoration:none;">Contact Us</a>
                    <a class="btn btn-link" href="" style="color: white;text-decoration:none;">Our
                        Services</a>
                    <a class="btn btn-link" href="" style="color: white;text-decoration:none;">Terms &
                        Condition</a>
                    <a class="btn btn-link" href="" style="color: white;text-decoration:none;">Support</a>
                </div>
                {{-- <div class="col-lg-1"></div> --}}

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="aside-stretch-right " style="background-color: #234b91;">
                        <h2 class="footer-heading "
                            style="font-family: Libre Baskerville,serif;font-size:1.25rem;font-weight:700;line-height:1.2;">
                            Free consultation</h2>
                        <form class="form-consultation" action="{{ route('emails') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Your Email" name="email">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" placeholder="Company Name"
                                    name="company_name">
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="form-control submit px-3">Send A Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-1"></div> --}}

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid  text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" style="color: #234b91;">
                    &copy; <a class="fw-semi-bold" href="#" style="color: #234b91;">Your Site Name</a>, All
                    Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end" style="color: #234b91;">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com" style="color: #234b91;">HTML
                        Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->



    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsMainImage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assetsMainImage/vendor/php-email-form/validate.js') }}"></script>





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








    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsGallery/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/php-email-form/validate.js') }}"></script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('contactus/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('mainpage/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('mainpage/js/main2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assetsMainImage/js/main.js') }}"></script>
    <script src="{{ asset('assetsGallery/js/main.js') }}"></script>
    <!-- Template Javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contactus/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".scrollto").click(function(event) {
                event.preventDefault();
                // Use window.location.href for redirection
                window.location.href = $(this).attr('href');
            });
        });
    </script>
</body>

</html>
