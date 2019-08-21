<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('general')}}</h1> 

	
	<a href="{{route('home.generalinfo', session('general'))}}">My Info</a> |
	<a href=""> List</a> |
	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>