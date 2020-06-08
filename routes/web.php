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

Route::get('/', function () {
    return view('landing');
});


//certification route
Route::get('/certification','CertificationController@index');
Route::get('/certification/search/','CertificationController@pencarian');
Route::get('/certification/{url}','CertificationController@show');

//network route
Route::get('/network','NetworkController@index');
Route::get('/network/search/','NetworkController@pencarian');
Route::get('/network/{url}','NetworkController@show');

Route::get('/article', 'ArticleController@index');

Route::get('/article/{url}', 'ArticleController@showArticle');

//article input
Route::get('/inputArticle' ,function(){
    return view('article-input');
});
Route::post('/inputArticle', 'ArticleInputController@input');