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
	 <br>
	 <h4>Lorem Ipsum page</h4>
	 <h4>You have selected the following number of paragraphs: {{{ $number }}}</h4>
	 <br>
	 <h4>Here is the data:</h4>
	 <div class="boxed">
		<h4>{{ print_r( $query) }}</h4>
	 </div>					
 </body>
</html>