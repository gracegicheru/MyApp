<!DOCTYPE html>
<html lang="en">
<head>
	<title>My App</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="/registerUser" id="registerform">
					    @csrf
					<span class="login100-form-title p-b-32">
					Register
					</span>
				
				

					<label for="name" class="col-md-0 col-form-label text-md-right">Name</label>
					<div class="wrap-input100 validate-input m-b-36 ">
						<input class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" data-validate = "Username is required" type="text" name="username" required >
						<span class="focus-input100"></span>

						@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				

				<label for="name" class="col-md-0 col-form-label text-md-right">Email</label>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						
						<input class="input100  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required  type="email" >
						<span class="focus-input100"></span>
						  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

						<label for="name" class="col-md-0 col-form-label text-md-right">Phone Number</label>					
					<div class="wrap-input100 validate-input m-b-12 ">
						
						<input class="input100 @error('phone') is-invalid @enderror" name="phone"id="phone" value="{{ old('phone') }}" required autocomplete="phone"  >
						<span class="focus-input100"></span>
						  @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<label for="name" class="col-md-0 col-form-label text-md-right">Password</label>					
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100 @error('password') is-invalid @enderror" value="{{ old('password') }}" required type="password"id="password" name="password"required autocomplete="new-password" >
						<span class="focus-input100"></span>
						  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<label for="name" class="col-md-0 col-form-label text-md-right">Confirm Password</label>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input id="password_confirmation"class="input100" type="password" name="password_confirmation" required autocomplete="new-password" >
						<span class="focus-input100"></span>

					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="registerbtn" >
							 {{ __('Register') }}
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


	
<!--===============================================================================================-->
 <script src="./assets/js/register.js"></script>
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>