<?php

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

Route::resource('news', 'PostsController');

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
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





// $route = 
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