<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('scout')}}</h1> 

	
	<a href="{{route('home.scoutinfo', session('scout'))}}">My Info</a> |
	<a href="{{route('home.postrequest')}}"> Post request</a> |
	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>