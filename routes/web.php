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


Route::group(['prefix' => 'calendar'], function() {
    Route::get('/diary', 'DiaryController@add');
    Route::get('/plan', 'PlanController@add');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'CalendarController@index');
