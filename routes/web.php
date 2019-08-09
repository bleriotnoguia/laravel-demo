<?php

use App\Events\FormSubmitted;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pusher/test', function(){
	return view('pusher');
});

Route::get('pusher/sender', function(){
	return view('sender');
});

Route::post('pusher/sender', function(){
	// dd(request()->content);
	$text = request()->content;
	// This is the post
	event(new FormSubmitted($text));
});

Route::resource('news', 'PostsController')->middleware('auth');

Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware'=>['auth']], function () {
	Route::resource('posts', 'PostsController');
});

Route::get('/', 'WellcomeController@index');

Route::get('contact', 'PagesController@contact');

// Route::get('/', function(\App\CacheInterface $cache){
// 	var_dump($cache);
// 	die();
// });

// Route::get('/', function(){
// 	dd(Cache2::get('TesT'));
// });

Route::resource('link', 'LinksController', ['only'=>['create', 'store']]);

Route::get('r/{link}', ['as'=>'link.show', 'uses'=>'LinksController@show'])->where('link', '[0-9]+');

// Route::get('links/create', 'LinksController@create');

// Route::post('links/create', 'LinksController@store');

// Route::resource('wellcome', 'WellcomeController');

// 'as' c'est pour nommer une route
Route::get('a-propos', ['as'=>'about', 'uses'=>'PagesController@about']);

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/events', 'EventController@index');

Route::get('salut', function(){
    return "salut les gens !";
});
 
Route::get('salut/{name}-{id}', ['as'=>'salut',function($slug, $id){
	//return "Lien: /salut/$slug-$id ";
	// $test = 'just un test';
	return "Lien : ". route('salut', ['slug' => $slug, 'id' => $id]);
}])->where('name', '[a-z0-9\-]+')->where('id', '[0-9]+');
// Un peut passer un tableau en  second paramettre pour nommer la "Route"
// Or mis  Route::get( on a aussi Route::put(, Route::post(, Route::delete( [si on veut que la requete soit en ...]
// On peut aussi grouper nos url en utilisant Route::group(

// Toute les Routes contenu dans ce grouppe seront prefixer par "admin"
Route::group(['prefix'=>'admin', 'middleware'=>'ip'], function(){
	Route::get('testadmin', function(){
		return "Conection l'administration !";
	});
});

// dd($route);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// routes for file upload

Route::get('/file', function(){
	return view('file');
});

Route::post('/file/upload', 'FileController@store')->name('file.upload');

Route::post('upload', 'FileController@upload')->name('upload');

// Route::get('upload', 'FileController@upload');

Route::get('email', 'EmailController@sendEmail');

Route::get('notif', function (){
	return view('notif');
});

Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});