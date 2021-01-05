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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/edit', 'Admin\ProfileController@add')->middleware('auth');
});



Route::get('XXX', 'Admin\AAAController@bbb');


Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create', 'Admin\NewsController@add');


Route::get('admin/profile/edit', 'Admin\ProfileController@add');

Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
});




Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('profile/edit', 'Admin\ProfileController@add');
     Route::post('profile/edit', 'Admin\PlofileController@update');
});