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
Route::get('/home/adminhome', 'HomeController@adminhome')->name('home.adminhome');	
Route::get('/home/scouthome', 'HomeController@scouthome')->name('home.scouthome');	
Route::get('/home/generalhome', 'HomeController@generalhome')->name('home.generalhome');	

Route::get('/home/admininfo/{id}', 'HomeController@admininfo')->name('home.admininfo');	
Route::post('/home/admininfo/{id}', 'HomeController@admininf');	

Route::get('/home/scoutinfo/{id}', 'HomeController@scoutinfo')->name('home.scoutinfo');	
Route::post('/home/scoutinfo/{id}', 'HomeController@scoutinf');	

Route::get('/home/generalinfo/{id}', 'HomeController@generalinfo')->name('home.generalinfo');	
Route::post('/home/generalinfo/{id}', 'HomeController@generalinf');	

Route::get('/home/scoutlist', ['as'=>'home.scoutlist','uses'=>'HomeController@scoutlist']);

Route::get('/home/addscout', 'HomeController@addscout')->name('home.addscout');
Route::post('/home/addscout', 'HomeController@addsc');
Route::get('/home/deletescout/{sid}', 'HomeController@deletescout')->name('home.deletescout');	
Route::post('/home/deletescout/{sid}', 'HomeController@deletescout');

Route::get('/home/generallist', ['as'=>'home.generallist','uses'=>'HomeController@generallist']);

Route::get('/home/addgeneral', 'HomeController@addgeneral')->name('home.addgeneral');
Route::post('/home/addgeneral', 'HomeController@addgen');

Route::get('/home/deletegeneral/{sid}', 'HomeController@deletegeneral')->name('home.deletegeneral');	
Route::post('/home/deletegeneral/{sid}', 'HomeController@deletegeneral');

Route::get('/home/scouthome/postrequest', 'HomeController@postrequest')->name('home.postrequest');	
Route::post('/home/scouthome/postrequest', 'HomeController@post');

Route::get('/home/adminhome/requests', 'HomeController@requests')->name('home.requests');	

Route::get('/home/activestatus/{id}', 'HomeController@activestatus')->name('home.activestatus');	








Route::get('/logout', 'LogoutController@index')->name('logout.index');	
          
