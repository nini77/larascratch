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

// Route::get('/', function () {
// 	return 'Hi there';
//     // return view('welcome');
// });

Route::get('/','PagesController@home');
Route::get('about','PagesController@about');
Route::get('cards','CardController@index');
Route::get('cards/{card}','CardController@show');

Route::get('chart','ChartController@index');
Route::get('rader','ChartController@rader');
Route::get('vue1','VueController@vueDataBind');


Route::get('cards/{note}/edit','NotesController@edit');
Route::post('cards/{card}/notes','NotesController@store');
Route::patch('notes/{note}','NotesController@update');

Route::get('about',function(){
	// return 'About page';
	$people = [];
	$people = ['Taylor','Matt','Jeffrey'];
	return view('pages.about',compact('people'));
});
Route::auth();

Route::get('/home', 'HomeController@index');
