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

use App\Http\Controllers\UploadsController;

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


Route::resource('yap', 'YapController');
Route::post('yappoll', 'YapController@createPoll')->name('yap.poll');


Route::post('/like/{id}', 'LikeController@like')->name('like');
Route::post('/retweet/{id}', 'RetweetController@retweet')->name('retweet');
Route::post('/pfupload', 'UploadsController@pfupload')->name('profileUpload.post');


Route::post('/pollsubmission/{id}', 'PollController@submitOption')->name('poll.submit');
Route::get('/pollresults/{id}', 'PollController@showResults')->name('displaypoll.results');
Route::post('pollvoting', 'PollController@showVoting')->name('voting');


Route::post('/follow/{user}', 'FollowController@follow')->name('follow');


Route::post('/search', 'SearchController@search')->name('search');


Route::prefix('asset')->group(function(){
    Route::get('icon/{name}/{state?}/{size?}', 'AssetController@icon')->name('icon');
    Route::get('{id}/pic/{size?}', 'AssetController@profilePic')->name('profilePic');
    Route::get('media/{id}', 'AssetController@tweetMedia')->name('tweetMedia');
});

Route::resource('conversation', 'ConversationController');


Route::get('/{name}', 'ProfileController@index')->name('profile');