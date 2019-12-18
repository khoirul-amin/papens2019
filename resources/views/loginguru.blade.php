<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Guru!!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('pageLogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('pageLogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('/pageLogin/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

                    <form  class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">{{ __('E-Mail Address') }}</span>
                            <input class="input100 @error('email') is-invalid @enderror"  id="email"  type="email" name="email" placeholder="Enter username"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					    </div>
                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span class="label-input100">{{ __('Password') }}</span>
                            <input class="input100 @error('password') is-invalid @enderror" id="password" type="password"  name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100"  id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
                                {{ __('Remember Me') }}
							</label>
						</div>

						<div>
                            @if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" class="txt1">
								Forgot Password?
							</a>
                            @endif
						</div>
                    </div>
                    <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
						</button>
					</div>
                    </form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
<script src="{{asset('pageLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('pageLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('pageLogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pageLogin/js/main.js')}}"></script>

</body>
</html>