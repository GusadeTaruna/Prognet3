<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/unify-admin/design-12/dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 17:34:22 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="{{ URL::asset('admin/img/favicon.ico')}}" />
		<title>Kelompok 3 Dashboard</title>

		<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700')}}" rel="stylesheet">
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{ URL::asset('admin/fonts/icomoon/icomoon.css')}}" />
		<link rel="stylesheet" href="{{ URL::asset('admin/css/main.css')}}" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{ URL::asset('admin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" />
		<link href="{{ URL::asset('admin/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet" />

		<!-- Data Tables -->
		<link rel="stylesheet" href="{{ URL::asset('admin/vendor/datatables/dataTables.bs4.css')}}" />
		<link rel="stylesheet" href="{{ URL::asset('admin/vendor/datatables/dataTables.bs4-custom.css')}}" />		

	</head>
	<body>

		
		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
							<a href="index-2.html" class="logo">
								<img src="{{ url('admin/img/unify.png')}}" alt="Unify Admin Dashboard">
							</a>
							<a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
								<i class="icon-sort"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-4">
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-notifications_none"></i>
										<span class="count-label"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											<li>
												<div class="icon">W</div>
												<div class="details">
													<p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
												</div>
											</li>
											<li>
												<div class="icon">J</div>
												<div class="details">
													<p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
												</div>
											</li>
											<li>
												<div class="icon secondary">R</div>
												<div class="details">
													<p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-person_outline"></i>
										<span class="count-label red"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
										<ul class="stats-widget">
				              <li>
				                <h4>$37895</h4>
				                <p>Revenue <span>+2%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
														<span class="sr-only">87% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>4,897</h4>
				                <p>Downloads <span>+39%</span></p>
				                <div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
														<span class="sr-only">65% Complete (success)</span>
													</div>
												</div>
				              </li>
				              <li>
				                <h4>2,219</h4>
				                <p>Uploads <span class="text-secondary">-7%</span></p>
				                <div class="progress">
													<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
														<span class="sr-only">42% Complete (success)</span>
													</div>
												</div>
				              </li>
				            </ul>
				          </div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<img class="avatar" src="{{ url('admin/img/user.png')}}" alt="User Thumb">
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="profile.html">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Profile</p>
												</a>
											</li>
											<li>
												<a href="profile.html">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											<li>
												<a href="filters.html">
													<div class="icon yellow">
														<i class="icon-schedule"></i>
													</div>
													<p>Activity</p>
												</a>
											</li>
										</ul>
										<div class="logout-btn">
											<a href="login.html" class="btn btn-primary">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<img src="{{ url('admin/img/user.png')}}" class="profile-thumb" alt="User Thumb">
							<h6 class="profile-name">Abigail Johnson</h6>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class="active selected">
									<a href="/dashboard" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
								</li>
								<li>
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-shopping-bag"></i>
										</span>
										<span class="nav-title">Product</span>
									</a>
									<ul aria-expanded="false">
										<li>
											<a href="/list-product">List</a>
										</li>
										<li>
											<a href="/category-product">Categories</a>
										</li>
										<li>
											<a href='#'>Discount</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-credit-card "></i>
										</span>
										<span class="nav-title">Transaction</span>
									</a>
								</li>
								<li>
									<a href="/courier" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-user "></i>
										</span>
										<span class="nav-title">Courier</span>
									</a>
								</li>
								<li>
									<a href="comments.html">
										<span class="has-icon">
											<i class="icon-cogs "></i>
										</span>
										<span class="nav-title">Manage User</span>
									</a>
								</li>
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				@yield('content')

				<footer class="main-footer fixed-btm">
				Copyright Unify Admin 2017.
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="{{ URL::asset('admin/js/jquery.js')}}"></script>
		<script src="{{ URL::asset('admin/js/tether.min.js')}}"></script>
		<script src="{{ URL::asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/unifyMenu/unifyMenu.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{ URL::asset('admin/js/moment.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ URL::asset('admin/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Chartist JS -->
		<script src="{{ URL::asset('admin/vendor/chartist/js/chartist.min.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/chartist/js/chartist-tooltip.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/chartist/js/custom/custom-line-chart.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/chartist/js/custom/custom-line-chart1.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/chartist/js/custom/custom-pie-charts.js')}}"></script>

		<!-- JVector Maps -->
		<script src="{{ URL::asset('admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/jvectormap/world-mill-en.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/jvectormap/gdp-data.js')}}"></script>

		<!-- Custom JVector Maps -->
		<script src="{{ URL::asset('admin/vendor/jvectormap/custom/world-map-markers.js')}}"></script>

		<!-- Data Tables -->
		<script src="{{ URL::asset('admin/vendor/datatables/dataTables.min.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>
		
		<!-- Custom Data tables -->
		<script src="{{ URL::asset('admin/vendor/datatables/custom/custom-datatables.js')}}"></script>
		<script src="{{ URL::asset('admin/vendor/datatables/custom/fixedHeader.js')}}"></script>

		<!-- Common JS -->
		<script src="{{ URL::asset('admin/js/common.js')}}"></script>
		
	</body>

<!-- Mirrored from bootstrap.gallery/unify-admin/design-12/dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 17:34:28 GMT -->
</html>