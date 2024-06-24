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

    <link href="{{ asset('assets/css/default/theme/pink.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-with-news-feed">
			<!-- BEGIN news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url({{ asset('img/background-login.jpg') }})"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Bonafont</b> Encuestas</h4>
					<p>
                        Encuesta Política Seguridad y Salud, Calidad y Superioridad, Medio ambiental, Diversidad e inclusión. <b>Código:C-FO-SE-076</b>
					</p>
				</div>
			</div>
			<!-- END news-feed -->
			
			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header mb-30px">
					<div class="brand">
						<div class="d-flex align-items-center">
							<span class="logo"></span>
							
							
							<b>Encuestas</b>
						</div>
						<small>Identificate con tu número de empleado</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
				<div class="login-content">
					<form action="{{ route('employee_auth') }}" method="POST" class="fs-13px">
						@csrf

						<div class="form-floating mb-15px">
							<input type="text" class="form-control h-45px fs-13px" placeholder="Número de empleado" name="employee_code" id="employee_code" />
							<label for="employee_code" class="d-flex align-items-center fs-13px text-gray-600">Número de empleado</label>
						</div>
						<div class="mb-15px">
							<button type="submit" class="btn btn-pink d-block h-45px w-100 btn-lg fs-14px">Iniciar sesión</button>
						</div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center text-gray-500-darker mb-0">
                            &copy; Bonafont. Derechos Reservados 2021
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->
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
</body>
</html>