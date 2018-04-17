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
Route::group(['prefix' => ''],function(){
    Route::resource('users','LearnController');
});

Route::post('upload', 'CareController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/care', 'CareController');

Route::get('/search', 'SearchController@index');
Route::get('/search/search', 'SearchController@search');

Route::get('/searchpatient', 'SearchPatientController@index');
Route::get('/search/searchpatient', 'SearchPatientController@searchpatient');
