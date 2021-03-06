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
Route::post('cards','CardController@store');


Route::get('chart','ChartController@index');
Route::get('rader','ChartController@rader');
Route::get('vue1','VueController@dataBind');
Route::get('vue2','VueController@vueShow');
Route::get('vue3','VueController@eventHandling');
Route::get('vue5','VueController@computedProperties');
Route::get('vue6','VueController@subscriptionPlanExercise');
Route::get('vue7','VueController@renderingWithLists');
Route::get('vue8','VueController@ajaxWithLists');
Route::get('vue9','VueController@alertComponent');
Route::get('vue10','VueController@filer');
Route::get('vue11','VueController@CustomDirective');


Route::get('api/tasks',function(){
	return App\Task::latest()->get();
});

Route::delete('/posts/{post}',function (App\Post $post){
	$post->delete();
});

Route::get('cards/{note}/edit','NotesController@edit');
Route::get('cards/{note}/delete','NotesController@delete');

Route::post('cards/{card}/notes','NotesController@store');
Route::patch('notes/{note}','NotesController@update');

Route::auth();

Route::get('/home', 'HomeController@index');
