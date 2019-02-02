<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return str_random(32);
});

$router->post('/register', 'AuthController@registerUser');
$router->post('/login', 'AuthController@login');
$router->get('/user/{id}', 'UserController@getUserId');

$router->get('/foo', function() {
    return 'Hello, GET Method';
});

$router->get('/foo/bar', 'ExampleController@fooBar');


$router->get('/getUser/{id}', 'ExampleController@getUserId');
$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost'); 

$router->post('user/profile', 'ExampleController@postUserProfile');

$router->get('/profile', ['as' => 'profile', 'uses' => 'ExampleController@getProfile']);
// http://localhost:8000/profile
// Route Profile Action : http://localhost:8000/profil/action

$router->get('/profil/action', ['as' => 'profile.action', 'uses' => 'ExampleController@getProfileAction']);

$router->get('/admin/home', ['middleware' => 'age', function(){
    return 'Cukup Umur';
}]);
//http://localhost:8000/admin/home?age=21

$router->get('/fail', function() {
    return 'Belum cukup umur';
});


$router->get('/response', 'ExampleController@response');