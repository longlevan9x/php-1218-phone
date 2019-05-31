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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "\App\Http\Controllers\HomeController@index");
Route::get('/detail/{slug}', "\App\Http\Controllers\HomeController@detail");

Route::prefix('admin')->group(function() {

	Route::middleware(['admin.guest'])->group(function() {
		Route::get('login', '\App\Http\Controllers\Admin\Auth\LoginController@showLoginForm');
		Route::post('login', '\App\Http\Controllers\Admin\Auth\LoginController@login');
	});
	

	Route::middleware(['admin', 'auth:admin'])->group(function() {

		Route::get("home", "\App\Http\Controllers\Admin\HomeController@index");

		Route::prefix("phone")->group(function() {
			Route::get('/', '\App\Http\Controllers\Admin\PhoneController@index')->name('phone.index');

			Route::get("/create", '\App\Http\Controllers\Admin\PhoneController@create')->name('phone.create');
			Route::post('/', '\App\Http\Controllers\Admin\PhoneController@store')->name("phone.store");

			Route::get('/{phone}/edit', '\App\Http\Controllers\Admin\PhoneController@edit')->name('phone.edit');

			Route::put('/{phone}', '\App\Http\Controllers\Admin\PhoneController@update')->name('phone.update');

			Route::delete('/{phone}', '\App\Http\Controllers\Admin\PhoneController@destroy')->name('phone.delete');
		});
	});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
