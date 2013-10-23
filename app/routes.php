<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array("as" => "home", function()
{
	$view = View::make('templates.default');
	return $view;

}))->before('auth');;

Route::get('user', array("as" => "user", function()
{
	$view = View::make('login.index');
	return $view;

}));

Route::post('user', array("as"=>"userPost","uses"=>"UserController@postLogin"));
Route::get('user/logout', array('as'=>'logout',"uses"=>"UserController@getLogout"))->before('auth');

Route::get( 'task/add',array("as" => "addTaskGet","uses"=>"TaskController@getAdd"))->before('auth');
Route::post('task/add',array("as" => "addTaskPost","uses"=>"TaskController@postAdd"))->before('auth');
Route::get('tasks',array("as" => "listTask","uses"=>"TaskController@listar"))->before('auth');
Route::post('task/check',array("as" => "checkTask","uses"=>"TaskController@check"))->before('auth');