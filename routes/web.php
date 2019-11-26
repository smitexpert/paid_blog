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
Route::fallback(function () {
    return view('404');
});

Route::namespace('Frontend')->group(function(){
    Route::get('/', 'HomePageController@index')->name('home');
    Route::get('/posts/all', 'HomePageController@index')->name('posts');
    Route::get('/single', 'HomePageController@single')->name('singe');

    Route::get('/new-story', 'HomePageController@single')->name('new-story');
    Route::prefix('/me')->name('me.')->group(function(){
        Route::get('/', 'HomePageController@single')->name('me');
        Route::get('/stories/draft', 'HomePageController@single')->name('stories.draft');
        Route::get('/series/draft', 'HomePageController@single')->name('series.draft');
        Route::get('/stats', 'HomePageController@single')->name('stats');
    });
});
