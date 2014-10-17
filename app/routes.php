<?php


#homepage
Route::get('/', function() {
	return View::make('index');
});

//list all books/search
Route::get('/list/{query?}', function($query) {
	return View::make('list');
});

//display the form for a new book
Route::get('/add', function() {

});

//process form for a new book
Route::post('/add', function() {
	
});

//display the form to edit a new book
Route::get('/edit/{title}', function($title) {

});

//process form for for a edit book
Route::post('/edit', function() {
	
});


Route::get('/data',	function() {
	
	//get the file
	$books = File::get(app_path().'/database/books.json');
	
	//convert to an array
	$books = json_decode($books, true);
	
	// using regular render() method, no label
	echo Pre::render($books);
});

Route::get('/ipsum', function() {
	
	//runt it as http://localhost/ipsum
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(1);
	echo implode('<p>', $paragraphs);
	
	
	
});

Route::get('/faker', function() {

	//https://github.com/fzaninotto/Faker/tree/master
	// require the Faker autoloader
	//require('../vendor/fzaninotto/faker/src/autoload.php');
		
	// use the factory to create a Faker\Generator instance
	//$faker = Faker\Factory::create();
	
	$faker = Faker::create();
    echo $faker->name.'<br/>'.'<br/>';
	
	for ($i=0; $i < 3; $i++) {
		echo $faker->name.'<br/>';
		echo $faker->address.'<br/>';
		echo $faker->email.'<br/>';
		echo $faker->text.'<br/>'.'<br/>';
				
	}
	
	//namespace Faker\Provider\en_US;
    
	
	
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






