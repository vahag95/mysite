<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/home', function () {
    return redirect('/blog');
});
get('/', function () {
    return redirect('/blog');
});

get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');
Route::resource('account' , 'AccountController');
Route::controller( 'auth' , 'Auth\AuthController' );
// get('auth/login' , 'Auth\AuthController@getlogin');
// get('auth/register' , 'Auth\AuthController@getRegister');
// post('auth/register' , 'Auth\AuthController@postRegister');
// post('auth/login' , 'Auth\AuthController@postLogin');
// get('auth/logout' , 'Auth\AuthController@getLogout');
// Route::controller('auth', 'Auth\AuthController');