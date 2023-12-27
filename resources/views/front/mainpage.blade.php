<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jawhara Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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









    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->





    @stack('styles')


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">
    <style>
        .btn-primary {
            /* Your styles for the .btn.btn-warning combination here */
            color: #212529 !important;
            /* Adjust text color as needed */
            background-color: #EDDD5E !important;
            /* Adjust background color for the warning style */
            border-color: #EDDD5E !important;
            /* Adjust border color for the warning style */
        }

        .carousel-item {
            background-position: center center !important;
            background-size: cover !important;
        }

        .orangeback {
            height: 30vh !important;

        }

        .blog {
            min-height: 55vh !important;

        }

        .singleproductbody {
            min-height: 55vh !important;

        }

        .category {
            min-height: 55vh !important;

        }

        .contact {
            min-height: 57.95vh !important;

        }

        .footer {
            visibility: visible !important;
            /* zoom: 106% !important; */
            /* height: 70vh !important; */

        }

        /* .noteblog{
            height: 40vh !important;

        }
        .searchblog{
            height: 5vh !important;

        } */

        .top {
            height: 15vh !important;

        }

        /**wait*/
        .navbar {}

        .uppernav span {
            font-size: 2.3vh !important;

        }

        .linkname {
            font-size: 2.2vh !important;
        }

        .dropdown-item {
            font-size: 2.3vh !important;
        }

        .dropdown-menu {
            min-width: 0.5vh !important;

        }

        .aboutpanel a {
            font-size: 2vh !important;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #234b91 !important;
            /* opacity: 1; Firefox */
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #234b91 !important;
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



        .navbar-toggler {
            font-size: 2.5vh !important;
            margin-top: 3vh !important;
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

            /* .navbar-nav a{
    padding: 0.2vh !important;
    margin:0.2vh !important;
    font-size:1vh !important;

} */

        }


        /* @media (max-width: 1658px) {
        .navbar-nav a{
            padding: 0.25vh !important;
            margin:0.25vh !important;
            font-size:0.7vh !important;

        }

        .name{
            font-size:2.1vh !important;
            margin-top: 1.25vh !important;
        }
        .navbar-toggler{
            font-size:2.5vh !important;
            margin-top: 3vh !important;
        }
       } */
        @media screen and (max-width: 1024px) {

            /* .navbar-nav a{
        padding: 0.1vh !important;
        margin:0.1vh !important;
        font-size:0.8vh !important;
        margin-top:1vh !important;

    }

     */
            .name {
                /* font-size:4vh !important; */

            }

            /* .uppernav i,span{
        font-size:1.5vh !important;

    }
    .navbar-toggler{
        font-size:2.5vh !important;
        margin-top: 3vh !important;
    } */
        }


        @media screen and (max-width: 768px) {


            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }

            .aside-stretch-right {
                background: transparent;
            }

            .aside-stretch-right:after {
                background: transparent;
                display: none;
            }

            /* .name{
font-size:3vh !important;
margin-top: 3vh !important;
} */

        }



        /* #portfolio {
            zoom: 86% !important;

        } */
        /*
        .footer {
            zoom: 86% !important;

        }

        .copyright {
            zoom: 86% !important;

        } */

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
            /* overflow-y: hidden !important; */

        }



        .topphone {
            font-size: 18px !important;
            font-weight: 500 !important;
            font-family: "Open Sans", sans-serif !important;
            -webkit-text-size-adjust: 100% !important;
            background: #EDDD5E !important;

        }

        .lowerfooter a ul,
        li,
        p,
        a,
        label,
        input,
        div {
            font-size: 15px !important;
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
    <div class="top">
        <div class="container-fluid px-0 uppernav" style="background-color: #234b91;">
            <div class="row g-0 d-none d-lg-flex">
                <div class="col-lg-6 ps-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center text-light">
                        <span style="font-size:2vh;">Follow Us:</span>
                        <a class="btn btn-link text-light" href=""><i style="font-size:2vh;"
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="font-size:2vh;"
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="font-size:2vh;"
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-link text-light" href=""><i style="font-size:2vh;"
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="https://api.whatsapp.com/send?phone=201274546598" target="_blank">
                        <div class="h-100 bg-secondary topphone d-inline-flex align-items-center text-dark py-2 px-4">
                            <span class="me-2 fw-semi-bold" style="color: #234b91;font-size:2vh;"><i
                                    class="fa fa-phone-alt me-2"></i>Call
                                Us:</span>
                            <span style="color: #234b91;font-size:2vh;">+2012 745 46598</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->




        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
            <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
                <h1 class="m-0 name" style="color: #234b91;">Demo</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" id="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-white " id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 bg-white">
                    <a href="{{ route('welcome') }}" class="nav-item nav-link linkname"
                        style="color: #234b91;font-weight:300;">HOME</a>
                    {{-- <a href="service.html" class="nav-item nav-link" style="color: #234b91;">Services</a>
                    <a href="product.html" class="nav-item nav-link" style="color: #234b91;">Products</a> --}}
                    <div class="nav-item dropdown">
                        <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle linkname"
                            data-bs-toggle="dropdown" id="products-dropdown">PRODUCTS CATEGORIES</a>
                        <div class="dropdown-menu bg-light m-0 downname" id="products-dropdown-menu"
                            style="border: 3px solid #234b91;">
                            @foreach ($categories as $post)
                                <a href="{{ route('categoryproducts', $post->id) }}"
                                    style="color: #234b91;padding:0.5vh 5vh;"
                                    class="dropdown-item">{{ $post->title }}</a>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://online.fliphtml5.com/doov/ooeo/" class="nav-item nav-link active linkname"
                        style="color: #234b91;">OUR CATALOG</a>
                    <a href="{{ route('index') }}" class="nav-item nav-link active linkname"
                        style="color: #234b91;">OUR BLOG</a>
                    <a href="{{ route('contactus') }}" class="nav-item nav-link active linkname"
                        style="color: #234b91;">CONTACT</a>
                    <div class="nav-item dropdown ">
                        <a href="#" style="color: #234b91;" class="nav-link dropdown-toggle linkname "
                            data-bs-toggle="dropdown" id="dropdown-menu-link">ABOUT</a>
                        <div class="dropdown-menu bg-light aboutpanel m-0 downname"
                            style="border: 3px solid #234b91;">
                            <a href="gallery.html" style="color: #234b91;" class="dropdown-item px-3 py-2 ">Our
                                Story</a>
                            <a href="feature.html" style="color: #234b91;" class="dropdown-item px-3 py-2 ">press</a>
                            <a href="team.html" style="color: #234b91;" class="dropdown-item px-3 py-2 ">FAQ</a>
                            <a href="testimonial.html" style="color: #234b91;"
                                class="dropdown-item px-3 py-2 ">Certificates</a>
                            <a href="{{ route('contactus') }}" style="color: #234b91;"
                                class="dropdown-item px-3 py-2 ">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div> --}}
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    @include('sweetalert::alert')
    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #234b91;color: white;visibility: visible;">
        <div class=" bottomfooter py-5">
            <div class="row lowerfooter g-5">
                <div class="col-lg-1 "></div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>6th october city,Egypt</p>
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
                    <a class="btn btn-link" href="" style="color: white;text-decoration:none;">Contact Us</a>
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
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: false
        })
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarToggler = document.getElementById("navbar-toggler");
            const navbarCollapse = document.getElementById("navbarCollapse");
            const dropdownLinks = document.querySelectorAll(".nav-link.dropdown-toggle");
            const productsDropdown = document.getElementById("products-dropdown");
            const productsDropdownMenu = document.getElementById("products-dropdown-menu");

            navbarToggler.addEventListener("click", function() {
                navbarCollapse.classList.toggle("show");
            });

            dropdownLinks.forEach(function(link) {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const dropdownMenu = link.nextElementSibling;
                    dropdownMenu.classList.toggle("show");
                });
            });


        });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assetsGallery/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/aos/aos.js') }}"></script>
    {{-- <script src="{{ asset('assetsGallery/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assetsGallery/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assetsGallery/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assetsGallery/js/main.js') }}"></script>

    @stack('scripts')


    <script src="{{ asset('contactus/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->


    <script src="{{ asset('contactus/js/main.js') }}"></script>

</body>

</html>
