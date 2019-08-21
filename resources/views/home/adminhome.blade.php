<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('admin')}}</h1> 

	
	<a href="{{route('home.admininfo', session('admin'))}}">My Info</a> |
	<a href=""> List</a> |
	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>