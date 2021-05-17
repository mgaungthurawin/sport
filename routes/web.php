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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
	Auth::routes();
});

Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
	Route::delete('media/{id}', 'MediaController@destroy');
	Route::resource('category', 'ArticleCategoryController');
	Route::resource('textarticle', 'TextArticleController');
	Route::resource('videoarticle', 'VideoArticleController');
});

Route::group(['namespace' => 'Web'], function () {
	Route::get('msisdn', 'WebController@msisdn');
	Route::post('msisdn', 'WebController@postMsisdn');
	Route::get('otp', 'WebController@otpSend');
});
