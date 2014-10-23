<!doctype html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<link rel='stylesheet' href='{{ asset('site.css') }}'>
</head>
<body>
	 <a href='/'>&larr; Home</a>
	 <br><br>
		<h4>Total Number of users selected {{ $numberOfUsers = $query['numberOfUsers'] }}<h4>
	 <br>
		This is the info the for the users generated: 	 
	 <br><br>
	 <div class="boxed">
		 @for($i = 0; $i < $numberOfUsers; $i++)
           {{ $query['users'][$i] }}
         @endfor
	 </div>				
 </body>
</html>
