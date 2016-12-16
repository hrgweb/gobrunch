<?php

// tmp

// Avatar
Route::get('getByGender/{gender}', 'AvatarsController@getByGender');

// Country
Route::get('country/{country}', 'CountriesController@getCountriesByID');

// Pages
Route::get('/', 'PagesController@index');
Route::get('home', 'PagesController@home');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register');
Route::get('office', 'PagesController@office');
Route::get('lobby', 'PagesController@lobby');
Route::get('account', 'PagesController@account');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('event', 'PagesController@event');

// User
Route::post('register', 'UsersController@register');
Route::post('signin', 'UsersController@signin');
Route::patch('user/changePassword', 'UsersController@changePassword');
Route::post('user/update', 'UsersController@update');
Route::get('logout', 'UsersController@logout');
Route::get('user/getUserID', 'UsersController@getUserID');

Route::group(['prefix' => 'user'], function() {
	Route::post('addFriend', 'UsersController@addFriend');
	Route::get('friendRequest', 'UsersController@friendRequest');
	Route::get('whoseOnline', 'UsersController@whoseOnline');
	Route::get('isAddFriendAlready/{id}', 'UsersController@isAddFriendAlready');
	Route::put('acceptFriend/{id}', 'UsersController@acceptFriend');
	Route::put('declineFriend/{id}', 'UsersController@declineFriend');
	Route::get('friendList', 'UsersController@friendList');
	Route::get('notifyUserIfAccepted/{id}', 'UsersController@notifyUserIfFriendRequestAccepted');
	Route::get('notifyUser', 'UsersController@notifyUser');
	Route::put('isSenderNotified/{id}', 'UsersController@isSenderNotified');
});

// RoomLayout
Route::group(['prefix' => 'layout'], function() {
	Route::get('getLayouts', 'RoomLayoutsController@getLayouts');
	Route::get('getPlaces', 'RoomLayoutsController@getPlaces');
});

// Events
Route::group(['prefix' => 'event', 'as' => 'event.'], function() {
	Route::post('store', ['as' => 'store', 'uses' => 'EventsController@store']);
	Route::get('getNextEvent', ['as' => 'next', 'uses' => 'EventsController@getNextEvent']);
	Route::get('remove/{id}', 'EventsController@remove');
	Route::get('update/{id}', 'EventsController@update');
	Route::get('getMyEventList', 'EventsController@getMyEventList');
	Route::get('getTimezoneList', 'EventsController@getTimezoneList');
	Route::get('getLayoutList', 'EventsController@getLayoutList');
	Route::get('getNumberOfSeats/{layoutID}', 'EventsController@getNumberOfSeats');
	Route::put('update/{eventID}', 'EventsController@update');
	Route::delete('remove/{eventID}', 'EventsController@remove');
	Route::get('getAllEventList', 'EventsController@getAllEventList');
	Route::post('joinEvent', 'EventsController@joinEvent');
	Route::get('getDateOfSession/{id}', 'EventsController@getDateOfSession');
	Route::get('getUserEventsCount', 'EventsController@getUserEventsCount');
	Route::post('inviteUser', 'EventsController@inviteUser');
	Route::get('getSelectEventList', 'EventsController@getSelectEventList');
	Route::get('getDateOfEvent', 'EventsController@getDateOfEvent');
	Route::get('getUserTimezone', 'EventsController@getUserTimezone');
	Route::get('eventPagination', 'EventsController@eventPagination');
	Route::get('isUserJoined/{id}', 'EventsController@isUserJoined');
	Route::get('{id}', 'EventsController@event');
});

