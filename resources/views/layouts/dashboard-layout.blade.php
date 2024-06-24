<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Encuestas &bull; Bonafont</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
	<!-- ================== END page-css ================== -->

    <link href="{{ asset('assets/css/default/theme/pink.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

	@yield('appHeader')
</head>
<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Encuestas</b></a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
                <div class="navbar-item">
                    <a
                    href="{{ route('logout') }}"
                    class="navbar-link"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="{{ asset('img/user-avatar.jpg') }}" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										{{ Auth::user()->name }}
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="menu-header">MENÚ PRINCIPAL</div>
					<div class="menu-item">
						<a href="{{ route('dashboard') }}" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-th-large"></i>
							</div>
							<div class="menu-text">Tablero</div>
						</a>
					</div>

					<div class="menu-item">
						<a href="{{ route('dashboard.surveys') }}" class="menu-link">
							<div class="menu-icon">
								<i class="fas fa-file-alt"></i>
							</div>
							<div class="menu-text">Encuestas</div>
						</a>
					</div>
					@can('admin.users.index')
					<div class="menu-item">
						<a href="{{ route('admin.users.index') }}" class="menu-link">
							<div class="menu-icon">
                                <i class="fas fa-users"></i>
							</div>
							<div class="menu-text">Usuarios</div>
						</a>
					</div>
					@endcan
					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
        @yield('content')
		<!-- END #content -->

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.canvaswrapper.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.colorhelpers.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.saturated.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.browser.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.drawSeries.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.uiConstants.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.crosshair.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.categories.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.navigate.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.touchNavigate.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.hover.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.touch.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.selection.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.symbol.js') }}"></script>
	<script src="{{ asset('assets/plugins/flot/source/jquery.flot.legend.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
	<!-- ================== END page-js ================== -->

	@yield('appFooter')
</body>
</html>