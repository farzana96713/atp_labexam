<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add General</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="/css1/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
			<a style="float: right;" type="button" href="{{route('logout.index')}}" class="btn btn-primary" > LOGOUT</a>
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">CREATE</h2>
                        <form method="POST" class="register-form" id="register-form">
						@csrf
                           <table border="0">
		                    <tr>
		                    	<td>Username</td>
			                  <td><input type="text" name="uname"></td>
		                    </tr>
		                    <tr>
			                <td>password</td>
			                <td><input type="text" name="pass"></td>
		                     </tr>
		                     <tr>
			                 <td>Address</td>
			                  <td><input type="text" name="address"></td>
		                       </tr>
		                       <tr>
		                     	<td>Phone</td>
			                    <td><input type="text" name="phone"></td>
		                         </tr>
		                         <tr>
		                    	<td>Email</td>
		                       	
		                 		<td><input type="text" name="email"></td>
			                    
		</tr>
		<tr>
			  <center><td> <input type="submit" name="add" id="add" class="form-submit" value="ADD"/></td></center>
		</tr>
</table>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/images/signup-image.jpg" alt="sing up image"></figure>
                       
                    </div>
                </div>
            </div>
        </section>

     

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>