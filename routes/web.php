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
Auth::routes();

Route::middleware(['auth'])->group(function(){

	Route::get('/', 'DashboardController@index')
		->name('dashboard');

	Route::get('profile/view/{id}','ProfileController@show')
		->name('profileShow');

	Route::get('profile/view/{id}/edit','ProfileController@edit')
		->name('profileEdit');

	Route::put('profile/update/{id}', 'ProfileController@update')
		->name('profileUpdate');


	Route::get('/settings', 'SettingsController@index')->name('settings');
	Route::put('/settings/update', 'SettingsController@update')->name('settingsUpdate');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup/{affiliate_id}', 'SignupController@index');
