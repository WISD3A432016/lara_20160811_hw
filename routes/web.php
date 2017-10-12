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

//home.index
Route::get('home', ['as' => 'home.index', function () {
    return view('home');
}]);

//about.index
Route::get('about', ['as' => 'about.index', function () {
    return view('about');
}]);

//news.index
Route::get('news', ['as' => 'news.index', function () {
    return view('news');
}]);
