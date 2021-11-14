
	<!DOCTYPE html>
    <html>
        <head>
    
            <!-- Basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">	
    
            <title>Porto - Responsive HTML5 Template</title>	
    
            <meta name="keywords" content="HTML5 Template" />
            <meta name="description" content="Porto - Responsive HTML5 Template">
            <meta name="author" content="okler.net">
    
            <!-- Favicon -->
            <link rel="shortcut icon" href="{{ asset('template/') }}/img/favicon.ico" type="image/x-icon" />
            <link rel="apple-touch-icon" href="{{ asset('template/') }}/img/apple-touch-icon.png">
    
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    
            <!-- Web Fonts  -->
            <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
    
            <!-- Vendor CSS -->
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/animate/animate.compat.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/magnific-popup/magnific-popup.min.css">
    
            <!-- Theme CSS -->
            <link rel="stylesheet" href="{{ asset('template/') }}/css/theme.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/css/theme-elements.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/css/theme-blog.css">
            <link rel="stylesheet" href="{{ asset('template/') }}/css/theme-shop.css">
    
            <!-- Current Page CSS -->
            <link rel="stylesheet" href="{{ asset('template/') }}/vendor/circle-flip-slideshow/css/component.css">
    
            <!-- Skin CSS -->
            <link id="skinCSS" rel="stylesheet" href="{{ asset('template/') }}/css/skins/default.css">
    
            <!-- Theme Custom CSS -->
            <link rel="stylesheet" href="{{ asset('template/') }}/css/custom.css">
    
            <!-- Head Libs -->
            <script src="{{ asset('template/') }}/vendor/modernizr/modernizr.min.js"></script>
    
        </head>
        <body data-plugin-page-transition>
            <div class="body">
                @include('front.layouts.top_nav')
    
                @yield('main_content')
                    
                @include('front.layouts.footer')
            </div>
    
            <!-- Vendor -->
            <script src="{{ asset('template/') }}/vendor/jquery/jquery.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.appear/jquery.appear.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.validation/jquery.validate.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/lazysizes/lazysizes.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/isotope/jquery.isotope.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/vide/jquery.vide.min.js"></script>
            <script src="{{ asset('template/') }}/vendor/vivus/vivus.min.js"></script>
    
            <!-- Theme Base, Components and Settings -->
            <script src="{{ asset('template/') }}/js/theme.js"></script>
    
            <!-- Circle Flip Slideshow Script -->
            <script src="{{ asset('template/') }}/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
            <!-- Current Page Views -->
            <script src="{{ asset('template/') }}/js/views/view.home.js"></script>
    
            <!-- Theme Custom -->
            <script src="{{ asset('template/') }}/js/custom.js"></script>
    
            <!-- Theme Initialization Files -->
            <script src="{{ asset('template/') }}/js/theme.init.js"></script>
    
        </body>
    </html>