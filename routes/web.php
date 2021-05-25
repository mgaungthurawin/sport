<?php

Route::group(['namespace' => 'Web'], function () {
	Route::get('/', 'WebController@index');
	Route::get('/news', 'WebController@news');
	Route::get('/videos', 'WebController@videos');
	Route::get('/{category_id}/news', 'WebController@categoryNews');
	Route::get('/{category_id}/videos', 'WebController@categoryVideos');
	Route::get('/{article_id}/article/{type}/detail', 'WebController@articleDetail');

	Route::get('/faq', 'WebController@faq');
	Route::get('/favorites', 'WebController@favorites');
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
