@extends('_master')

@section('title')
	<title>Welcome to my P3 Application</title>
@stop

@section('body')
		<h1>Developer's Best Friend</h1>
		<div>
		<fieldset>	
			<p>Lorem Ipsum Generator</p>
			<p>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation.</p>
			<p>Let's generate some text</p>
			<p>How many paragraphs do you want to generate?<p>
				
				{{ Form::open(array('url' => '/lorem', 'method' => 'GET')) }}
			
					{{ Form::label('query', 'Pick a number from the list ? '); }}
					{{ Form::selectRange('number', 1, 20); }}
					{{ Form::submit('Generate Paragraphs'); }}
									
				{{ Form::close() }}
		</fieldset>		
		</div>
		
		<br><br>
		
		<div>
		<fieldset>	
			<p>Random User Generator</p>
			<p>We are creating random user data for your applications. Like Lorem Ipsum, but for people.</p>
			<p>How many people do you want to generate?<p>
				{{ Form::open(array('url' => '/faker', 'method' => 'GET')) }}
				
						{{ Form::label('value', 'Pick a number from the list ? '); }}
						{{ Form::selectRange('number', 1, 20); }}
						{{ Form::submit('Generate People'); }}
						
				{{ Form::close() }}
		</fieldset>
		</div>
@stop