<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('admin')}}</h1> 

	
	<a href="{{route('home.admininfo', session('admin'))}}">My Info</a> |
	<a href="{{route('home.scoutlist')}}">scout</a> |
	<a href="{{route('home.generallist')}}">General Users</a> |
	<a href="{{route('home.requests')}}">Request from scout</a> |
	
	
	<a href="{{route('logout.index')}}">logout</a>


</body>
</html>