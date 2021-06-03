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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forum', 'ForumController@show')->name('forum');

Route::get('/hunter-page', 'ForumController@HunterForum')->name('hunterforum');

Route::post('/forum/add-forum', 'ForumController@AddForum')->name('add.forum');
