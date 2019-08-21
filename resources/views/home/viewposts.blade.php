
<!DOCTYPE html>
<html>
  <head>
    <title>Posts</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="/css1/style.css">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
      margin: 15px 0 4px;
      }
      h1 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover {
      border: 1px solid #1c87c9;
      }
      table {
      width: 100%;
      }
      h4 {
      padding: 15px 0 5px;
      }
      .question-answer label {
      display: inline-block;
      padding: 0 20px 15px 0;
      }
      .question-answer input {
      width: auto;
      }
      th, td {
      width: 17%;
      padding: 15px 0;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      border-bottom: 1px solid #095484;
      color: #095484;
      }
      .first-col {
      width: 26%;
      text-align: left;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484; 
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form method="post">
	  @csrf
        <u><center><h1>Requests from scout</h1></center></u>
       
	
		<a style="float: right;" type="button" href="{{route('logout.index')}}" class="btn btn-primary" > LOGOUT</a>
		
		
        <table>
          <tr>
              <th>Id</th>
            <th>Country</th>
            <th>Place</th>
            <th>Cost</th>
            <th>Travel Medium</th>
			<th>Description</th>
			<th>Rep</th>
			<th>poststatus</th>
			<th></th>
			<th></th>
			
			
			
          </tr>
                       @foreach($sc as $value)
								   
		                             <tr>
									    <td>{{$value['id']}}</td>
		                             	<td>{{$value['country']}}</td>
										<td> {{$value['place']}}</td>
										
		                              	
		                              	<td> {{$value['cost']}}</td>
										<td> {{$value['travelmedium']}}</td>
										<td>{{$value['description']}}</td>
										<td>{{$value['representation']}}</td>
										<td>{{$value['poststatus']}}</td>
										
										
										
			                           	<td><a href="{{route('home.editposts',$value['id'])}} " type="button" class="btn btn-primary">Edit</a></td>
											<td><a href=" " type="button" class="btn btn-primary">Delete</a></td>
										
			                        
			                          </tr>
									  
 								
 
	
  @endforeach
</table>
 </form>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    </div>

  </body>
  
</html>