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

Route::get('/', function() {
    return view('pages.home');
})->name('home');

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
    'index'
]]);

// News routes
Route::resource('news', 'Admin\NewsController', ['except' => [
    'index'
]]);
