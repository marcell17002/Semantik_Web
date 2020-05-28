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

Auth::routes();
Route::get('/register/details', function (){
    return view('auth/registerDetail');
})->middleware('auth');
Route::post('/register/details', 'RegisterDetailController@userDetails');

//certification route
Route::get('/certification','CertificationController@index');
Route::get('/certification/{url}','CertificationController@show');
Route::post('/certification/{url}','CertificationController@userGotCertif');

Route::get('/certification-pick', function () {
    return view('certification-pick');
});
Route::get('/connection', 'ConnectionController@showPeople');

Route::get('/article', function () {
    return view('article');
});

//profile route
Route::get('/profile/{username}', 'ProfileController@showProfileData');
Route::get('/profile/edit', function () {
    return view('update-profile');
});

Route::get('/article-pick', function () {
    return view('article-pick');
});
Route::get('/update-profile', function () {
    return view('update-profile');
});