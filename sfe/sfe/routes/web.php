<?php

use Illuminate\Support\Facades\Route;
use App\Ville;
use App\Region;
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('/setting', function () {
		$villes = Ville::all();
		$regions = Region::all();
	    return view('setting')->with('villes', $villes)->with('regions', $regions)->with('message', '');
	});




	Route::resource('region', 'RegionController', ['except' => ['show']]);
	Route::resource('cas', 'CasController', ['except' => ['show']]);
	Route::resource('ville', 'VilleController', ['except' => ['show']]);
	Route::resource('mesure', 'MesureController', ['except' => ['show']]);

});

