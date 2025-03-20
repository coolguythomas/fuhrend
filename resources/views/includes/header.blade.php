<div class="full-width-header">
    <!--Header Start-->
    <header id="rs-header" class="rs-header header-style1">
        <!-- Middle Header Area End -->
        <div class="middle-header hidden-md">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-part">
                            <a href="/"><img src="{{ asset("assets/logo.png") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-contact-info">
                            <div class="contact-part">
                                <div class="info-icon">
                                    <i class="fi fi-rr-map-marker-home"></i>
                                </div>
                                <div class="contact-info">
                                    <div class="info-title">
                                     Office address
                                    </div>
                                    <div class="info-des">
                                        {{ env("SITE_ADDRESS") }}
                                    </div>
                                </div>
                            </div>
                            <div class="contact-part">
                                <div class="info-icon">
                                    <i class="fi fi-rr-envelope-plus"></i>
                                </div>
                                <div class="contact-info">
                                    <div class="info-title">
                                        Email us
                                    </div>
                                    <div class="info-des">
                                        <a href="mailto:{{ env("SITE_EMAIL") }}">
                                            {{ env("SITE_EMAIL") }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-part margin-no">
                                <div class="info-icon">
                                    <i class="fi fi-rr-phone-call"></i>
                                </div>
                                <div class="contact-info">
                                    <div class="info-title">
                                        For enquires
                                    </div>
                                    <div class="info-des">
                                        <a href="tel:{{ env("SITE_PHONE1") }}"> {{ env("SITE_PHONE1") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle Header Area End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row-table">
                    <div class="col-cell header-logo">
                        <div class="logo-area">
                            <a href="/">
                                <img class="sticky-logo" src="{{ asset("assets/logo.png") }}" alt="logo">
                                <img class="normal-logo" src="{{ asset("assets/logo.png") }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <nav class="rs-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li class="@yield('home')">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="@yield('about')">
                                            <a href="/about-us">About Us</a>
                                        </li>
                                        <li class="@yield('services')">
                                            <a href="/our-services">Our Services</a>
                                        </li>
                                        <li class="@yield('team')">
                                            <a href="/our-team">Our Team</a>
                                        </li>
                                        <li class="@yield('contact')">
                                            <a href="/contact-us">Contact Us</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-cell">
                        <div class="expand-btn-inner">
                            <ul>
                                <li class="toolbar-sl-share">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </li>
                                {{-- <li class="search-parent">
                                    <a class="hidden-xs rs-search" href="#">
                                        <i class="fi fi-rr-search"></i>
                                    </a>
                                    <div class="sticky_form">
                                        <form role="search" class="bs-search search-form" method="get">
                                            <div class="search-wrap">
                                                <label class="screen-reader-text active">
                                                    Search for: </label>
                                                <input type="search" placeholder="Searching..."
                                                    name="s" class="search-input" value="">
                                                <button type="submit" value="Search"><i
                                                        class="fi fi-rr-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li> --}}
                                <li class="btn-quote"><a class="quote-button" href="/contact-us">Get A Quote<i
                                            class="fi fi-rr-arrow-small-right"></i></a></li>
                                <li class="humburger">
                                    <a id="nav-expander" class="nav-expander bar" href="#">
                                        <div class="bar">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <div class="close-btn">
                <a id="nav-close2" class="nav-close">
                    <div class="line">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <ul class="nav-menu">
                <li class="@yield('home')">
                    <a href="/">Home</a>
                </li>
                <li class="@yield('about')">
                    <a href="/about-us">About Us</a>
                </li>
                <li class="@yield('services')">
                    <a href="/our-services">Our Services</a>
                </li>
                <li class="@yield('team')">
                    <a href="/our-team">Our Team</a>
                </li>
                <li class="@yield('contact')">
                    <a href="/contact-us">Contact Us</a>
                </li>
            </ul> <!-- //.nav-menu -->
            <!-- //.nav-menu -->

            <!-- //.nav-menu -->
            <div class="canvas-contact">
                <div class="address-area">
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-map-marker-home"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Office address</h4>
                            <em>{{ env("SITE_ADDRESS") }}</em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-envelope-plus"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Email us</h4>
                            <em><a href="mailto:{{ env("SITE_EMAIL") }}">{{ env("SITE_EMAIL") }}</a></em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <i class="fi fi-rr-phone-call"></i>
                        </div>
                        <div class="info-content">
                            <h4 class="title">For enquires</h4>
                            <em>{{ env("SITE_PHONE1") }}</em>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
