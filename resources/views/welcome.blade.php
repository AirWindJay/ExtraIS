{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>IN - PATIENTS RECORD (CHART) CHECKLIST</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/welcomepage/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/animate/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/animsition/css/animsition.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/util.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/welcomepage/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="/login" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-logo">
						<img src="../bghmclogo.gif" alt="" width="150%">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="user_name" id="user_name" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="user_pass" id="user_pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #A7A7A7">
    <div id="app">
        <main>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="width: 50%; margin:auto; margin-top: 5%; background: #53E85A">
                        <div class="card-header" align="center">
                            <img src="../img/BGHMC_LOGO.gif" alt="" width="30%">
                            <h1>HOMIS LOGIN</h1>
                            @if ( $errors->has('username'))
                                <small class="text-danger">Invalid Username or Password</small> <br>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/login" enctype="multipart/form-data">
                                @csrf
                                <label for="user_name">USERNAME</label>
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Username" required autofocus>
                                <br>
                                <label for="user_pass">PASSWORD</label>
                                <input id="user_pass" type="password" class="form-control{{ $errors->has('user_pass') ? ' is-invalid' : '' }}" placeholder="Password" name="user_pass" required>
                                <button type="submit" class="btn btn-success mt-5" style="width: 100%s">Login</button>
                            </form>
                            
                            {{-- <form class="login100-form validate-form" method="POST" action="/loginhomis" enctype="multipart/form-data">
                                @csrf
                                <span class="login100-form-logo"> --}}
                                    {{-- <img src="../bghmclogo.gif" alt="" width="150%"> --}}
                                {{-- </span>

                                <span class="login100-form-title p-b-34 p-t-27">
                                    Log in
                                </span>

                                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                    <input class="input100" type="text" name="user_name" id="user_name" placeholder="Username">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" type="submit">
                                        Login
                                    </button>
                                </div>

                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    

    <script src="/js/app.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>
