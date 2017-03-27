<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getnews', [
   'uses' => 'contentController@search',
   'as' => 'news'
]);
Route::get('/mainpage', [
   'uses' => 'HandlenewsController@search',
   'as' => 'Handlenews'
]);
Route::get('/fullnews', [
   'uses' => 'TotalnewsController@search',
   'as' => 'fullnews'
]);
Route::post('/gettotalnews', [
   'uses' => 'contentController@display',
   'as' => 'totalnews'
]);
Route::post('/getanalysis', [
   'uses' => 'analysisController@display',
   'as' => 'analysis'
]);