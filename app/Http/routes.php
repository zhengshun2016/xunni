<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
  Route::get('/','PostController@index');
  Route::resource('discussions','PostController');
  Route::get('/user/register','UserController@register');
  Route::post('/user/register','UserController@store');
  Route::get('/user/login','UserController@login');
  Route::post('/user/login','UserController@signin');
  Route::get('/verify/{confirm_code}','UserController@confirmEmail');
  Route::get('/logout','UserController@logout');
  Route::get('/photos','PhotoController@index');
  Route::resource('comment','CommentController');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
