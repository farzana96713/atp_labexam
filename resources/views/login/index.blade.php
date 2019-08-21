<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images7/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor7/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts7/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts7/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor7/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor7/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor7/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor7/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor7/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css7/util.css">
	<link rel="stylesheet" type="text/css" href="/css7/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form method="post" class="login100-form validate-form">
				@csrf
					<span class="login100-form-title p-b-40">
						Login
					</span>


					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Login with Username
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" name="uname" placeholder="name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div>
		{{session('msg')}}
	</div>
					
					<div class="flex-col-c p-t-224">
						<span class="txt2 p-b-10">
							Don’t have an account?
						</span>

						<a href="{{route('login.signup')}}" class="txt3 bo1 hov1">
							Sign up now
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->
	<script src="/vendor7/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor7/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor7/bootstrap/js/popper.js"></script>
	<script src="/vendor7/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor7/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor7/daterangepicker/moment.min.js"></script>
	<script src="/vendor7/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor7/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js7/main.js"></script>

</body>
</html>









































