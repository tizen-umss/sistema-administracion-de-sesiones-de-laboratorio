@extends('layouts.auth')

@section('content')
    <!-- <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucfirst(config('app.name')) }} Autentificacion</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Ups!</strong> Hubo problemas con el ingreso de datos:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contrasenia</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('auth.password.reset') }}">Forgot your password?</a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Remember me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->





<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{ url('login_v15') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ url('login_v15') }}/css/main.css">
<!--===============================================================================================-->
<div>
<!-- <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">{{ ucfirst(config('app.name')) }} Autentificacion</div>
                <div class="panel-body"> -->

                <!-- @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Ups!</strong> Hubo problemas con el ingreso de datos:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ url('login_v15') }}/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Bienbenidos al sistema de administracion de sesiones de laboratorio
					</span>
				</div>

				<form role="form" class="login100-form" method="POST"action="{{ url('login') }}">
                <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Correo</span>
						<input class="input100" type="email" name="email" placeholder="Ingrese su correo electronico" value="{{ old('email') }}">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Contrasenia</span>
						<input class="input100" type="password" name="password" placeholder="Ingrese su Contrasenia">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- </div>
    </div>
    </div>
    </div>
    </div> -->
    </div>

<!--===============================================================================================-->
<script src="{{ url('login_v15') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ url('login_v15') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ url('login_v15') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('login_v15') }}/js/main.js"></script>
@endsection