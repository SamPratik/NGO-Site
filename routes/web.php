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
