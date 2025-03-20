<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{ config("app.name") }} - Constracting Nigeria Limited</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/logo.png") }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/font-awesome.min.css") }}">
    <!-- Uicons Regular Rounded css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/uicons-regular-rounded.css") }}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/flaticon.css") }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/animate.css") }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/slick.css") }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/owl.carousel.css") }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/off-canvas.css") }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/magnific-popup.css") }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset("assets/css/rsmenu-main.css") }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/rs-spacing.css") }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/responsive.css") }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @yield("style")
</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="{{ asset("assets/logo.png") }}"
                        alt="Logo"></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        @include('includes.header')
        <!--Full width header End-->

       @yield('content')
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="{{ asset("assets/js/modernizr-2.8.3.min.js") }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <!-- op nav js -->
    <script src="{{ asset("assets/js/jquery.nav.js") }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
    <!-- wow js -->
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset("assets/js/skill.bars.jquery.js") }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
    <!-- Slick js -->
    <script src="{{ asset("assets/js/slick.min.js") }}"></script>
    <!-- waypoints.min js -->
    <script src="{{ asset("assets/js/waypoints.min.js") }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
    <!-- counterup.min js -->
    <script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>
    <!-- contact form js -->
    <script src="{{ asset("assets/js/contact.form.js") }}"></script>
    <!-- main js -->
    <script src="{{ asset("assets/js/main.js") }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                toastr.options = {
                    "progressBar": true,
                    "positionClass": "toast-top-right"
                }
            });
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif
    @if (Session::has('errors'))
        <script>
            $(document).ready(function() {
                toastr.options = {
                    "progressBar": true,
                    "positionClass": "toast-top-right"
                }
            });
            toastr.error("{{ Session::get('errors') }}");
        </script>
    @endif
    @yield("script")
</body>

</html>
