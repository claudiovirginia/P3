<?php


#homepage
Route::get('/', function() {
	return View::make('index');
});


Route::get('/lorem', function() {
	
	$numberParagraphs = Input::get('number');
	
	//runt it as http://localhost/ipsum
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numberParagraphs);
	
	//$data['request'] = $request;
	$data['number'] = $numberParagraphs;
	$data['paragraphs'] = $paragraphs;
	
		
	//implode returns a string from the elements from an array
	return View::make('lorem')
		->with('query', implode('<p>', $paragraphs))
		->with('data', $data)
		->with('number', $numberParagraphs);
});






Route::get('/faker', function() {

	// use the factory to create a Faker\Generator instance
	//$faker = Faker\Factory::create();
		
	$value = Input::get('number');
	$val = intval($value);
	$faker = Faker::create();
	$data = array();
	
	
	//I am using a class
	$GetUser = new GetUser($value);
	$users = $GetUser->getInfo();
	
	$elements = array($faker);
	//echo var_dump($elements).'<br/>';
	
	
	for ($i=0; $i < $val; $i++) {
		array_push ($data, $faker->name);
		array_push($data, $faker->address);
		array_push($data, $faker->phoneNumber);
		array_push($data, $faker->country);
	   	array_push($data, $faker->email);
	}
	
	//new
	$data1['numberOfUsers'] = $value;
	$data1['users'] = $users;
	//echo Pre::render($data1).'<br/>';

	
	//return View::make('list')
		//->with('query', $data)  //$data
		//->with('total', $val);
		
			
	return View::make('faker')
		->with('query', $data1);
					
		//return View::make( 'viewfile', $data )->with( 'data', $data );
			
});

Route::get('form', function(){
	//render app/views/form.blade.php
	return View::make('form');
});

Route::post('form-submit', array('before'=>'csrf',function(){
	//form validation come here
}));

Route::get('/current/url', function(){
	//render app/views/form.blade.php
	//return URL::current();
	return URL::full();
});


// app/routes.php
Route::get('first', function()
{
// Redirect to the second route.
    return Redirect::to('second');
});

Route::get('second', function()
{
    return URL::previous();
});



// app/routes.php
Route::get('example', function()
{
    return URL::to('another/route');
});


Route::get('example1', function()
{
    //return URL::to('another/route', array('foo', 'bar'),true);
	return URL::secure('another/route', array('foo', 'bar'));
});



Route::get('the/best/avenger', array('as' => 'ironman', function()
{
    return 'Tony Stark';
}));

Route::get('example2', function()
{
    return URL::route('ironman');
});






