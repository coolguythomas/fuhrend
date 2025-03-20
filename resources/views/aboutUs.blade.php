@extends('layouts.app')
@section('about')
    current-menu-item
@endsection
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    About Us
                </h1>
                <span class="sub-text">We are dedicated to innovative construction, delivering quality, <br>
                     building trust, and shaping Nigeria's future with excellence.</span>
                <ul class="breadcrumbs-area">
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Start -->
    <div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset("assets/images/about.png") }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15">
                    <div class="sec-title">
                        <span class="sub-text">
                            <img width="24" height="24" src="{{ asset("assets/images/instance-fill.svg") }}" alt="Images">
                            Who We Are
                        </span>
                        <h2 class="title pb-20">
                            Construction solutions focused future ready
                        </h2>
                        <p class="desc pb-37">
                            Leverage agile frameworks to provide a robust synopsis for high
                            level overviews. Iterative approaches to corporate strategy data
                            foster to collaborative thinking to empowerment.
                        </p>
                        <div class="row y-middle">
                            <div class="col-lg-4 col-md-4 sm-mb-30">
                                <div class="about-img">
                                    <img src="{{ asset("assets/images/abzt.jpg") }}" alt="About">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <ul class="check-lists">
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Pre-construction services</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Industrial manufacturing</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="icon-list-icon">
                                            <i class="fa fa-check-circle"></i>
                                        </span>
                                        <span class="list-text">Building and construction</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-47 md-mt-25">
                            <div class="col-lg-6 col-md-4 sm-mb-30">
                                <div class="btn-part">
                                    <a class="readon more know" href="/our-services">Our services</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="signeture-img">
                                    <img src="{{ asset("assets/images/signeture1.png") }}" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Skillbar Choose Start -->
    @include('includes.skills')
    <!-- Skillbar Choose End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style1 bg3">
        <div class="row">
            <div class="col-lg-4 offset-2 con-left-6">
                <div class="contact-section">
                    <div class="contact-wrap">
                        <div class="sec-title mb-45">
                            <span class="sub-text">
                                <img src="{{ asset("assets/images/bubble-chart-fill.png") }}" alt="Images">
                                Lets talk
                            </span>
                            <h2 class="title">
                                Have an upcoming project?
                            </h2>
                        </div>
                        <div id="form-messages"></div>
                        <form method="post" action="{{ route("contact") }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" name="name" type="text"
                                            placeholder="Your Full-Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" name="email"
                                            placeholder="Your E-Mail Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text"name="phone"
                                            placeholder="Your Phone Number" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" name="subject"
                                            placeholder="Your Subject" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon more submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
                <div class="contact-box-item">
                    <div class="contact-box mb-20">
                        <div class="contact-icon">
                            <img src="{{ asset("assets/images/map-pin-line.svg") }}" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Office address</a></h4>
                            <p class="services-txt">{{ env("SITE_ADDRESS") }}</p>
                        </div>
                    </div>
                    <div class="contact-box mb-20">
                        <div class="contact-icon">
                            <img src="{{ asset("assets/images/mail-send-fill.svg") }}" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Email us</a></h4>
                            <p class="services-txt">
                                {{-- <a href="mailto:test@gamil.com">test@gamil.com</a><br> --}}
                                <a href="mailto:{{ env("SITE_EMAIL") }}">{{ env("SITE_EMAIL") }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="contact-icon">
                            <img src="{{ asset("assets/images/phone-fill.svg") }}" alt="images">
                        </div>
                        <div class="content-text">
                            <h4 class="title"><a href="#">Call us</a></h4>
                            <p class="services-txt">
                                <a href="tel:{{ env("SITE_PHONE1") }}">{{ env("SITE_PHONE1") }}</a><br>
                                <a href="tel:{{ env("SITE_PHONE2") }}">{{ env("SITE_PHONE2") }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact-right-img"></div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Call To Action Choose Start -->
    <div class="rs-cta bg4 pt-120 pb-115 md-pt-80 md-pb-75">
        <div class="container">
            <div class="call-action">
                <div class="sec-title text-center">
                    <span class="sub-text yellow-color">
                        Ready to build a brighter future together?
                    </span>
                    <h2 class="title white-color pb-20">
                        Join Our Trusted Team!
                    </h2>
                    <p class="desc desc3 pb-35">
                        Together, we deliver excellence through innovation, <br> quality craftsmanship, and unwavering commitment to success.
                    </p>
                    <div class="btn-part">
                        <a class="readon more contact" href="/contact-us">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Choose End -->
@endsection
