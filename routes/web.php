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
Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/login/signup', 'LoginController@signup')->name('login.signup');	
Route::post('/login/signup', 'LoginController@sign');





Route::get('/logout', 'LogoutController@index')->name('logout.index');	
          
