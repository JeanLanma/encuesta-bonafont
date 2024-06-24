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
    <link href="{{ asset('assets/css/default/theme/pink.min.css') }}" rel="stylesheet" id="themeCss">
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
		<div class="login login-v2 fw-bold">
			<!-- BEGIN login-cover -->
			<div class="login-cover">
				<div class="login-cover-img" style="background-image: url({{ asset('img/background-login.jpg') }})" data-id="login-cover-image"></div>
				<div class="login-cover-bg"></div>
			</div>
			<!-- END login-cover -->
			
			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header">
					<div class="brand">
						<div class="d-flex align-items-center">
							<span class="logo"></span> <b>Encuestas</b>
						</div>
						<small>Panel de acceso para observadores</small>
					</div>
					<div class="icon">
						<i class="fa fa-lock"></i>
					</div>
				</div>
				<!-- END login-header -->
				
				<!-- BEGIN login-content -->
				<div class="login-content">
					<form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px border-0 @error('employee_code') is-invalid @enderror" placeholder="Número de empleado" name="employee_code" />
							<label for="employee_code" class="d-flex align-items-center text-gray-600 fs-13px">Número de empleado</label>

                            @error('employee_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
						</div>
						<div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0 @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" id="password" />
							<label for="password" class="d-flex align-items-center text-gray-600 fs-13px">Contraseña</label>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
						</div>
						<div class="form-check mb-20px">
							<input class="form-check-input border-0" type="checkbox" name="remember" value="1" id="rememberMe" {{ old('remember') ? 'checked' : '' }} />
							<label class="form-check-label fs-13px text-gray-500" for="rememberMe">
								Recuérdame
							</label>
						</div>
						<div class="mb-20px">
							<button type="submit" class="btn btn-pink d-block w-100 h-45px btn-lg">Iniciar sesión</button>
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
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('assets/js/demo/login-v2.demo.js') }}"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>