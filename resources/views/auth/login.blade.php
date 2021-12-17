<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('public/login/images/icons/favicon.ico')}}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/css/main.css')}}">
	<!--===============================================================================================-->
</head>

<body>
	<div class="container-login100">
		<form class="login100-form validate-form" method="POST" action="{{route('login')}}">
			<span class="login100-form-title p-b-43">
				{{ __('Đăng nhập') }}
			</span>
			@csrf
			<div class="wrap-input100 validate-input">
				<input id="user" type="text" class="input100 @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>
				<span class="focus-input100"></span>
				<span class="label-input100">{{ __('Tài khoản') }}</span>
				@error('user')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="wrap-input100 validate-input" data-validate="Password is required">
				<input id="password" type="password" class="input100" name="password" required autocomplete="current-password">
				<span class="focus-input100"></span>
				<span class="label-input100">{{ __('Mật khẩu') }}</span>
			</div>

			<div class="flex-sb-m w-full p-t-3 p-b-32">
				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" type="checkbox" name="remember" id="ckb1" {{ old('remember') ? 'checked' : '' }}>
					<label class="label-checkbox100" for="ckb1">
						{{__('Nhớ mật khẩu')}}
					</label>
				</div>

				<div>
					<span class="txt1">{{__('Chưa có tài khoản? Đăng ký')}}</span>
					<a href="{{Route('register')}}" class="txt1">
						{{__('tại đây')}}
					</a>
				</div>
			</div>

			<div class="container-login100-form-btn">
				<button type="submit" class="login100-form-btn">
					{{ __('Login') }}
				</button>
			</div>
			<div class="d-flex justify-content-center p-2">
				<a href="." class="item p-r-5">Home</a>
				<span class="text-center"> | </span>
				<a href="#" class="item p-l-5">Contact me</a>
			</div>
		</form>
	</div>

	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('public/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/js/main.js')}}"></script>


</body>

</html>