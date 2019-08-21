<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('scout')}}</h1> 

	
	<a href="{{route('home.scoutinfo', session('scout'))}}">My Info</a> |
	<a href=""> List</a> |
	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>