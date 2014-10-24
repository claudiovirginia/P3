<?php

#homepage
Route::get('/', function() {
	return View::make('index');
});


#lorem ipsum page
Route::get('/lorem', function() {
	
	//getting the value from the dropdown laravel form
	$numberParagraphs = Input::get('number');
	
	//generate the paragraphs
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numberParagraphs);
	
	//passing this array to the view		
	return View::make('lorem')
		->with('query', implode('<p>', $paragraphs))
		->with('number', $numberParagraphs);
});


#user generator page
Route::get('/faker', function() {

	//getting the value from the dropdown laravel form
	$value = Input::get('number');
				
	//I am using a class to generate the records
	$GetUser = new GetUser($value);
	$users = $GetUser->getInfo();
			
	//I am storing the data in this array
	$data['numberOfUsers'] = $value;
	$data['users'] = $users;
		
	//passing this array to the view		
	return View::make('faker')
		->with('query', $data);
});


#password generator page
Route::get('/password', function() {

	//getting the value from the dropdown laravel form
	$value = Input::get('number');
		
	//I am using a class to generate a password
	$Password = new GetPassword($value);
	$data = $Password->getPassword();	
			
	$data['number'] = $value;
	$data['data'] = $data;
	
	//passing this array to the view		
	return View::make('password')
		->with('query', $data);
	
});
