<?php



Route::get('/home', 'homeController@index');
Route::get('/tours', 'homeController@alltours');
Route::get('/hotels', 'hotelController@allhotels');

Route::get('/search', 'LiveSearch@search');
Route::get('/searchHotel', 'HotelSearch@hotsearch');

Route::get('/details/{id}', 'homeController@details');
Route::post('/details/{id}', 'homeController@request');

Route::get('/hoteldetail/{id}', 'hotelController@Hotdetails');
Route::post('/hoteldetail/{id}', 'hotelController@hotelReq');



Route::get('/login', 'clientController@login');


Route::post('/login', 'clientController@getlog');
Route::get('/logout', 'logoutController@index');



Route::group(['middleware'=>['check']], function(){

		Route::get('/pdf/{id}', 'clientController@pdf');
		Route::post('/rate', 'clientController@rate');
		Route::get('/login/{id}', 'clientController@loginId')->name('login.loginId');
	});	
