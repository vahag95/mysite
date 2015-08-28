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

get('/', function () {
    return redirect('/blog');
});

get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');

get('auth/login' , 'Auth\AuthController@getlogin');
get('auth/register' , 'Auth\AuthController@getRegister');
post('auth/login' , 'Auth\AuthController@postLogin');