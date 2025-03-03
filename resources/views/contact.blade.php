@extends('layouts.app')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img6">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Contact Us
                </h1>
                <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official<br>
                    modeserunt mollit anim id est 20 years experience.</span>
                <ul class="breadcrumbs-area">
                    <li title="Go to konstruk">
                        <a class="active" href="index.html">Home</a>
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
                    <iframe src="https://maps.google.com/maps?q=rstheme&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-section">
                    <div class="contact-wrap">
                        <div class="sec-title mb-60">
                            <h2 class="title title4 ser-style4">Get in touch</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="email" name="email"
                                            placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="phone" name="phone"
                                            placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                        <input class="from-control" type="text" id="website" name="website"
                                            placeholder="Your Website" required="">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
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
                                <img src="images/1.png" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Office address</a></h4>
                                <p class="services-txt"> Ta-134/A, Gulshan Badda<br> Link Rd, Dhaka </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-30">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="images/2.png" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Email us</a></h4>
                                <span><a href="mailto:support@devsdesign.net">support@devsdesign.net</a></span><br>
                                <span><a href="mailto:info@codesless.com">info@codesless.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="images/3.png" alt="images">
                            </div>
                            <div class="content-text">
                                <h4 class="title"><a href="#">Call us</a></h4>
                                <span><a href="tel:(+088)589-8745">(+088)589-8745</a></span><br>
                                <span> <a href="tel:(+088)222-9999">(+088)222-9999</a></span>
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
    <div class="rs-partner partner-main-home partner-modify9">
        <div class="container">
            <div class="partner-content-widget">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="5"
                    data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                    data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false">
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/1_1.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/1_1.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/2_1.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/2_1.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/3_1.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/3_1.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/4.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/4.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/5.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/5.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/6.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/6.png" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="images/7.png" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="images/7.png" title="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->
@endsection
