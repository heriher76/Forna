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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminPagesController@index');

    Route::resource('/users', 'Admin\UserController');

    Route::resource('/news', 'Admin\NewsController');

    Route::resource('/facts', 'Admin\FactController');

    Route::resource('/messages', 'Admin\MessageController');
});

Auth::routes();

Route::get('/', 'PagesController@index');

Route::get('/news', 'PagesController@news');
Route::get('/news/{slug}', 'PagesController@showNews');
Route::post('/news/{id}/send-comment', 'PagesController@sendComment');

Route::get('/contact', 'PagesController@contact');

Route::post('/send-message', 'Admin\MessageController@store');
