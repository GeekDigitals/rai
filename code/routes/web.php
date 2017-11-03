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

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/admin/logout', 'Auth\\LoginController@logout')->name('logout');
Route::get('/admin/profile', 'Admin\\UserController@profile');

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['AuthAdmin']], function() {
        Route::get('/users/data', ['as' => 'users.data', 'uses' => 'Admin\\UserController@anyData']);
        Route::resource('users', 'Admin\\UserController');
    });

    Route::get('/homepage/data', ['as' => 'homepage.data', 'uses' => 'Admin\\HomepageController@anyData']);
    Route::resource('/homepage', 'Admin\\HomepageController');

    Route::get('/about-us/data', ['as' => 'about-us.data', 'uses' => 'Admin\\AboutUsController@anyData']);
    Route::resource('/about-us', 'Admin\\AboutUsController');

    Route::get('/social-media/data', ['as' => 'social-media.data', 'uses' => 'Admin\\SocialMediaController@anyData']);
    Route::resource('/social-media', 'Admin\\SocialMediaController');

});

Route::get('/', 'WebController@index');
