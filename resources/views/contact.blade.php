@extends('layouts.app')
@section('contact')
    current-menu-item
@endsection
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Contact Us
                </h1>
                <span class="sub-text">Building Nigeria's future with quality craftsmanship, <br> innovative solutions, and trusted
                    partnerships in construction.</span>
                <ul class="breadcrumbs-area">
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact contact-style6 pb-120 md-pb-80">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.186407543167!2d4.612270874494065!3d8.48124819732359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364ce643e26cc9%3A0xe47a663ebce70e0d!2sTanke%20Rd%2C%20Akanbi-1v%20240102%2C%20Kwara%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1742374531091!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-section">
                    <div class="contact-wrap">
                        <div class="sec-title mb-60">
                            <h2 class="title title4 ser-style4">Get in touch</h2>
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
                                        <input class="from-control" name="email" type="text"
                                            placeholder="Your E-Mail Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" name="phone" type="text"
                                            placeholder="Your Phone Number" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" name="subject" type="text"
                                            placeholder="Your Subject" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon more submit sub-con" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact-project"></div>
        </div>
        <!-- Contact Icons Section End -->
        <div class="rs-contact pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 md-mb-30">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset("assets/images/map-pin-line.svg") }}" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Office address</a></h4>
                                <p class="services-txt"> {{ env("SITE_ADDRESS") }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-30">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset("assets/images/mail-send-fill.svg") }}" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Email us</a></h4>
                                {{-- <span><a href="mailto:support@devsdesign.net">support@devsdesign.net</a></span><br> --}}
                                <span><a href="mailto:{{ env("SITE_EMAIL") }}">{{ env("SITE_EMAIL") }}</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="{{ asset("assets/images/phone-fill.svg") }}" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Call us</a></h4>
                                <span><a href="tel:{{ env("SITE_PHONE1") }}">{{ env("SITE_PHONE1") }}</a></span><br>
                                <span> <a href="tel:{{ env("SITE_PHONE2") }}">{{ env("SITE_PHONE2") }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Icons Section End -->
    </div>
    <!-- Contact Section End -->

    <!-- Partner Start -->
    @include('includes.partner')
    <!-- Partner End -->
@endsection
