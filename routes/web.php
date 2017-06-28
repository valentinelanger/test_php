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
  return view('pages.home');
});


Route::get('/profiles', 'ProfilesController@index');

Route::get('/profiles/create', 'ProfilesController@create');

Route::post('/profiles', 'ProfilesController@store');

Route::get('/payments', 'PaymentsController@index');

Route::get('/payments/state', 'PaymentsController@state');


