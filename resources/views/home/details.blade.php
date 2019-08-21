<!DOCTYPE html>
<html lang="en">
<head>
	<title>Post details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images2/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts2/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css2/util.css">
	<link rel="stylesheet" type="text/css" href="/css2/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(/images2/bg-01.jpg);">
					<a style="float: right;" type="button" href="{{route('home.generalhome')}}" class="btn btn-primary" > Back</a>
				</div>

				<form method="post" class="login100-form validate-form">
				@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">country</span>
						<input  value="{{$inf['country']}}" name="country" class="input100" type="text" readonly>
						<span class="focus-input100"></span>
					</div>
					
					 <div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
						<span class="label-input100">place</span>
						<input value="{{$inf['place']}}"  name="place" class="input100" type="password" readonly>
						<span class="focus-input100"></span>
					</div>
				
                   <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">cost</span>
						<input value="{{$inf['cost']}}"  name="cost" class="input100" type="text" readonly>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Phone Number is required">
						<span class="label-input100">travel medium</span>
						<input value="{{$inf['travelmedium']}}"  name="medium" class="input100" type="text" readonly>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
						<span class="label-input100">description</span>
						<input value="{{$inf['description']}}" name="description" class="input100" type="text"readonly>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
						<span class="label-input100">representation</span>
						<input value="{{$inf['representation']}}" name="representation" class="input100" type="text" readonly>
						<span class="focus-input100"></span>
					</div>
					
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Update
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="/vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor2/bootstrap/js/popper.js"></script>
	<script src="/vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor2/daterangepicker/moment.min.js"></script>
	<script src="/vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js2/main.js"></script>

</body>
</html>