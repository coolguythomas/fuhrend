<footer id="rs-footer" class="rs-footer footer-main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
                    <div class="footer-logo mb-51 md-mb-30">
                        <a href="/"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
                    </div>
                    <div class="textwidget">
                        <p class="pb-20">We build your dreams.</p>
                        <p class="pb-25"><strong>Opening Hours</strong> : Monday - Sat: 8am to 6pm</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="fi fi-rr-map-marker-home"></i>
                            <div class="desc">
                                {{ env('SITE_ADDRESS') }}
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)15569569365">{{ env('SITE_PHONE1') }}</a><br>
                                <a href="tel:(+880)15569569366">{{ env('SITE_PHONE2') }}</a>
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <div class="desc">
                                {{-- <a href="mailto:"></a><br> --}}
                                <a href="mailto:{{ env('SITE_EMAIL') }}">{{ env('SITE_EMAIL') }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="/our-services">Building Construction</a></li>
                        <li><a href="/our-services">Road Construction</a></li>
                        <li><a href="/our-services">Borehole Construction</a></li>
                        <li><a href="/our-services">Interior Design</a></li>
                        <div class="d-lg-none">
                            <li><a href="/our-services">Flooring Design</a></li>
                            <li><a href="/our-services">Drainage Construction</a></li>
                            <li><a href="/our-services">Bridge Construction</a></li>
                            <li><a href="/our-services">Roofing</a></li>
                        </div>
                        <li><a href="/our-services">Plumbing</a></li>
                        <li><a href="/our-services">Renovation</a></li>
                        <li><a href="/our-services">Real Estate Development</a></li>
                        <li><a href="/our-services">General Supplies & Related Logistics</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="widget-desc">Want to stay updated on the latest in construction, innovation, and design
                        trends? Join our newsletter.</p>
                    <form action="{{ route('newsletter') }}" method="post">
                        @csrf
                        <p>
                            <input type="email" name="email" placeholder="Your Email Address" required="">
                            <input type="submit" value="Subscribe Now">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <ul class="copy-right-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/our-services">Services</a></li>
                        <li><a href="/our-team">Our Team</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center">
                        <p>© 2025 {{ config('app.name') }}. Developed By <a href="https://uctomtech.com/"
                                target="blank">Uctomtech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
