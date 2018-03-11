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

// Home Page Routes
Route::get('/', 'Admin\HomeController@home')->name('home');
Route::get('/aboutus-text', 'Admin\HomeController@aboutUsText')->name('aboutus-text');
Route::post('/about-us', 'Admin\HomeController@updateAboutUs')->name('update.about-us');

Route::get('/news', function() {
    return view('pages.news');
})->name('news');

Route::get('/achievements', function() {
    return view('pages.achievements');
})->name('achievements');


//========= Admin Routes ==========
// Authentication routes...
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');

// Notice routes...
Route::resource('notices', 'Admin\NoticeController', ['except' => [
    'index'
]]);

// Our work routes...
Route::resource('works', 'Admin\WorkController', ['except' => [
    'index',
    'update',
    'destroy'
]]);
Route::post('works/{works}', 'Admin\WorkController@update')->name('works.update');
Route::get('works/delete/{work}', 'Admin\WorkController@destroy')->name('works.delete');

// Notice routes
Route::resource('notices', 'Admin\NoticeController');

// News routes
Route::resource('news', 'Admin\NewsController', ['except' => [
    'index'
]]);

// Achievements routes...
Route::resource('achievemetns', 'Admin\AchievementsController', ['except' => [
    'index'
]]);
