@extends('front.mainpage')

@push('styles')
    <link href="{{ asset('contactus/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('contactus/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('contactus/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('contactus/css/style.css') }}" rel="stylesheet">

    <style>
        @media (max-width: 767.98px) {
            .footer .aside-stretch-right {
                background: transparent;
            }

            .footer .aside-stretch-right:after {
                background: transparent;
                display: none;
            }

            #left {
                display: block !important;
            }

            #right {
                display: BLOCK !important;
                margin-top: 50px !important;
            }

            .midllecontent {
                display: block !important;
            }
        }




        @media screen and (max-width: 1200px) {

            /* #left{
                                display: block !important;
                            }
                            #right{
                                display: BLOCK !important;
                            }
                            .midllecontent{
                                display: block !important;
                            } */
            html,
            body {
                /* width: 100% !important;
                height: 100% !important; */
                margin: 0px !important;
                padding: 0px !important;
                overflow-x: hidden !important;
            }

        }
    </style>
@endpush


@section('content')
    @include('sweetalert::alert')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact Us</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl contactdetails py-5 contact">
        {{-- <div class="middlecontact"> --}}
        <div style="width: 100%;height:auto;" class="row">
            <div class="text-center mx-auto wow fadeInUp " data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3" style="color: #234b91 !important;">
                    Contact Us</p>
                <h1 class="mb-5 text-center" style="color: #234b91;">If You Have Any Query, Please Contact Us</h1>
            </div>
        </div>
        <div class="row g-5 midllecontent">
            <div id="left" style="width: 100%;height:100%; display:flex;justify-content:center;align-items:center;">
                <div class="col-lg-6 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4" style="color: #234b91;">Need a functional contact form?</h3>
                    <p class="mb-4" style="color: #234b91;">The contact form is currently inactive. Get a functional
                        and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a
                        little code and you're done. <a href="https://htmlcodex.com/contact-form"
                            style="color: #234b91;font-weight: bolder;">Download Now</a>.</p>
                    <form class="form" action="{{ route('emails') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        name="name">
                                    <!-- <label for="name">Your Name</label> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        name="email">
                                    <!-- <label for="email">Your Email</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company" placeholder="Company Name"
                                        name="company_name">
                                    <!-- <label for="subject">Subject</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                    <!-- <label for="message">Message</label> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit"
                                    style="color: #234b91;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.5s" id="right">
                    <h3 class="mb-4" style="color: #234b91;">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Our Office</h6>
                            <span style="color: #234b91;">6th October, Cairo, Egypt</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Call Us</h6>
                            <span style="color: #234b91;">Office No. : +2012 745 46598</span>
                            <br>
                            <span style="color: #234b91;">Phone No. : +2012 745 46598</span>

                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div
                            class="flex-shrink-0 btn-square bg-secondary rounded-circle text-center d-flex justify-content-center align-items-center">
                            <!-- <i class="fa fa-map-marker-alt text-body" style="color: #234b91 !important;"></i> -->
                            <i class="fab fa-whatsapp text-body"
                                style="color: #234b91 !important;font-size:x-large;text-align: center;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">WhatsApp No. :</h6>
                            <span style="color: #234b91;">+2012 745 46598</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body" style="color: #234b91 !important;"></i>
                        </div>
                        <div class="ms-3">
                            <h6 style="color: #234b91;">Mail Us</h6>
                            <span style="color: #234b91;">alaa.abdelhakam@hotmail.com</span>
                        </div>
                    </div>

                    <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221216.74624151355!2d31.107459066874853!3d29.964722196292094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e126df199d%3A0x24a6cf9d2fda5678!2z2YXYr9mK2YbYqSDZpiDYo9mD2KrZiNio2LHYjCDZhdit2KfZgdi42Kkg2KfZhNis2YrYstip!5e0!3m2!1sar!2seg!4v1703255914082!5m2!1sar!2seg"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221216.74624151355!2d31.107459066874853!3d29.964722196292094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e126df199d%3A0x24a6cf9d2fda5678!2z2YXYr9mK2YbYqSDZpiDYo9mD2KrZiNio2LHYjCDZhdit2KfZgdi42Kkg2KfZhNis2YrYstip!5e0!3m2!1sar!2seg!4v1703255914082!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.942805631199!2d31.465332523916544!3d30.00979862021051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458238638bdc52d%3A0xbaecf0ef02e48a1!2s5th%20settlement!5e0!3m2!1sar!2seg!4v1701065978218!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
    <!-- Contact End -->
@endsection

@push('scripts')
    <script src="{{ asset('contactus/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('contactus/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('contactus/js/main.js') }}"></script>
@endpush
