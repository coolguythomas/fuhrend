@extends('layouts.app')
@section('home')
    current-menu-item
@endsection
@section('content')
    <!-- Slider Start -->
    <div class="rs-slider slider-style2">
        <div class="slider slider-slide-1">
            <div class="slider-item">
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                            <span class="sl-subtitle wow fadeInDown">Contracting Nigeria Limited <span
                                    class="text-success">(RC:1957007)</span></span>
                            <h1 class="sl-title wow fadeInLeft">
                                Innovative Construction Solutions
                            </h1>
                            <h2 class="small-title2 wow fadeInLeft">Efficient Project <span class="bdr-big">Delivery</span>
                            </h2>
                            <p class="sl-desc wow fadeInLeft2">
                                Efficient, reliable construction and contracting services tailored to <br> meet Nigeria's
                                growing infrastructure needs.
                            </p>
                            <div class="slider-bottom wow fadeinup">
                                <a class="readon more" href="/contact-us">Partner with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slide-bg2">
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                            <span class="sl-subtitle wow fadeInDown">Contracting Nigeria Limited <span
                                    class="text-success">(RC:1957007)</span></span>
                            <h1 class="sl-title wow fadeInLeft">
                                Reliable Construction Partners
                            </h1>
                            <h2 class="small-title2 wow fadeInLeft">Trusted Contracting <span
                                    class="bdr-big">Excellence</span></h2>
                            <p class="sl-desc fadeInLeft2">
                                Building Nigeria's future with quality craftsmanship, <br> innovative solutions, and trusted
                                partnerships in construction.
                            </p>
                            <div class="slider-bottom wow fadeinup">
                                <a class="readon more" href="/contact-us">Partner with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- About Start -->
    <div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-part">
                        <img src="{{ asset('assets/images/about-2-1.jpg') }}" alt="About">
                    </div>
                </div>
                <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15">
                    <div class="sec-title">
                        <span class="sub-text sub-text2">
                            About Us
                        </span>
                        <h2 class="title pb-20">
                            We build your dreams.
                        </h2>
                        <p class="desc pb-20">
                            We bring your vision to life with precision and passion. Every project we undertake is more than
                            just construction.
                        </p>
                        <h4 class="small-title pb-15">
                            With expertise, innovation, and dedication <br> we turn your aspirations into lasting realities.
                            Let's build your dreams together.
                        </h4>
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <ul class="check-lists2">
                                    <li>Dream Builders</li>
                                    <li>Precision Built</li>
                                    <li>Innovating Excellence</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <ul class="check-lists2">
                                    <li>Trusted Quality</li>
                                    <li>Future Focused</li>
                                    <li>Legacy Makers</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-part mt-28">
                            <a class="readon more know" href="/about-us">Know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section Start -->
        <div class="rs-services services-style1 pt-120 md-pt-70">
            <div class="container">
                <div class="sec-title text-center mb-50">
                    <span class="sub-text sub-text2">
                        Our Services
                    </span>
                    <h2 class="title">
                        Expert construction, quality craftsmanship <br> and reliable contracting solutions.
                    </h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                    data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                    data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                    data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                    data-md-device-nav="false" data-md-device-dots="true">
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Building Construction</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon2.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Road Construction</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon3.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Borehole Construction</a></h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon4.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Drainage Construction</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon5.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Bridge Construction</a></h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon6.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Interior Design</a></h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Roofing</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Flooring Design</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Plumbing</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Real Estate Development</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">General Supplies & Related Logistics</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider">
                        <div class="services-img">
                            <a href="/our-services">
                                <img src="{{ asset('assets/images/service-icon1.png') }}" alt="Services">
                            </a>
                        </div>
                        <div class="services-content">
                            <div class="services-titles">
                                <h4 class="title"><a href="/our-services">Renovation</a>
                                </h4>
                            </div>
                            <p class="services-txt">
                                Nor is there anyone who loves or pursues or desires to obtain pain of itself,
                                because it is pain, but occasionally.
                            </p>
                            <div class="services-btn btn-style2">
                                <a class="btn-text" href="/our-services">Know More<i
                                        class="fi fi-rr-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
    </div>
    <!-- About End -->

    <!-- Skillbar Choose Start -->
    @include('includes.skills')
    <!-- Skillbar Choose End -->

    <!-- Counter Start -->
    <div class="rs-counter counter-style1 counter-modify1 bg6 pt-120 pb-120 md-pt-70 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">341</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Successfully Project</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">302</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">153</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Qualified Engineers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">32</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Years Experiance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->

    <!-- Testimonial Section Start -->
    <div id="rs-testimonial" class="rs-testimonial testimonial-style2 gray-bg2 pt-120 md-pt-80 md-pb-80 sm-pb-42">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 md-mb-50">
                    <div class="testi-img">
                        <img src="{{ asset('assets/images/man-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title mb-50">
                        <span class="sub-text sub-text2">
                            Testimonials
                        </span>
                        <h2 class="title">
                            Testimony from Satisfied Customer
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
                        data-md-device="1" data-md-device-nav="false" data-md-device-dots="true">
                        <div class="testi-item">
                            <div class="item-content">
                                <span><img src="{{ asset('assets/images/bubble-chart-fill.svg') }}"
                                        alt="Testimonial"></span>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide with additional clickthroughs from
                                    DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('assets/images/testi1.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">David M. Martin</div>
                                    <span class="testi-title">CEO, Pro Theme</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span><img src="{{ asset('assets/images/bubble-chart-fill.svg') }}"
                                        alt="Testimonial"></span>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide with additional clickthroughs from
                                    DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('assets/images/testi2.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Jessica Alba</div>
                                    <span class="testi-title">Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span><img src="{{ asset('assets/images/bubble-chart-fill.svg') }}"
                                        alt="Testimonial"></span>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide with additional clickthroughs from
                                    DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('assets/images/testimonial/style1/testi3.jpg') }}"
                                        alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Abdur Rashid</div>
                                    <span class="testi-title">CEO, Brick Consulting</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="item-content">
                                <span><img src="{{ asset('assets/images/bubble-chart-fill.svg') }}"
                                        alt="Testimonial"></span>
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to
                                    beta test. Override the digital divide with additional clickthroughs from
                                    DevOps. Nanotechnology immersion along the information highway.</p>
                            </div>
                            <div class="testi-content">
                                <div class="image-wrap">
                                    <img src="{{ asset('assets/images/testi4.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="testi-information">
                                    <div class="testi-name">Maria Masud</div>
                                    <span class="testi-title">Apps Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Cta Start -->
    <div class="rs-cta bg4 pt-116 pb-116 md-pt-76 md-pb-76">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-text-center md-mb-30">
                    <div class="sec-title">
                        <span class="sub-text sub-text2 white-color">
                            Let's Talk
                        </span>
                        <h2 class="title white-color">
                            Have any upcoming project?
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn-part text-right md-text-center">
                        <a class="readon more contact" href="/contact-us">Request Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

    <!-- Partner Start -->
    @include('includes.partner')
    <!-- Partner End -->
@endsection
