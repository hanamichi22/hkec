
<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half sidebar-left-collapsed" data-style-switcher-options="{'changeLogo': false}">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>@yield('title_name') | @yield('application_title_name')</title>
		<meta name="keywords" content="@yield('title_name')" />
		<meta name="description" content="@yield('application_title_name')">
		<meta name="author" content="@yield('author_name')">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/animate/animate.compat.css">

		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/vendor/morris/morris.css" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/css/theme.css" />


		<!-- Theme Layout -->
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/css/layouts/modern.css" />
		<!--(remove-empty-lines-end)-->



		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('templateadmin/') }}/css/custom.css">

		<!-- Head Libs -->
		<script src="{{ asset('templateadmin/') }}/vendor/modernizr/modernizr.js"></script>
		<script src="{{ asset('templateadmin/') }}/master/style-switcher/style.switcher.localstorage.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			@include('backend/layouts/topbar')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				@include('backend/layouts/sidebar')
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					@yield('page-header')

					<!-- start: page -->
					@yield('page-content')
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="{{ asset('templateadmin/') }}/#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="{{ asset('templateadmin/') }}/img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="{{ asset('templateadmin/') }}/img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="{{ asset('templateadmin/') }}/img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="{{ asset('templateadmin/') }}/img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="{{ asset('templateadmin/') }}/vendor/jquery/jquery.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="{{ asset('templateadmin/') }}/master/style-switcher/style.switcher.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/popper/umd/popper.min.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/common/common.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/select2/js/select2.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/flot/jquery.flot.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/flot/jquery.flot.pie.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/flot/jquery.flot.categories.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/flot/jquery.flot.resize.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/raphael/raphael.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/morris/morris.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/gauge/gauge.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/snap.svg/snap.svg.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		<script src="{{ asset('templateadmin/') }}/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('templateadmin/') }}/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('templateadmin/') }}/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('templateadmin/') }}/js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->
		{{-- <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-42715764-8', 'auto');
		  ga('send', 'pageview');
		</script> --}}
		<!-- Examples -->
		<script src="{{ asset('templateadmin/') }}/js/examples/examples.dashboard.js"></script>

	</body>
</html>