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
Route::get('/explore', 'ExploreController@index')->name('explore');
Route::get('/notifications', 'NotificationsController@index')->name('notifications');
Route::get('/messages', 'MessagesController@index')->name('messages');
Route::get('/{id}/bookmarks', 'BookmarksController@index')->name('bookmarks');
Route::get('/{id}/lists', 'ListController@index')->name('lists');
Route::get('/{name}', 'ProfileController@index')->name('name');



Route::post('/pfupload', 'UploadsController@pfupload')->name('profileUpload.post');

Route::prefix('asset')->group(function(){
    Route::get('icon/{name}/{color}', 'AssetController@icon');
    Route::get('user/pic', 'AssetController@profilePic');
});
