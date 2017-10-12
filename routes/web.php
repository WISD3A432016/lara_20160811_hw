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

/*
//home.index
Route::get('home', ['as' => 'home.index', function () {
    return view('home');
}]);
*/
//將 Route 的內容搬至 homeController 內
Route::get('home', ['as' => 'home.index','uses' => 'HomeController@index']);

/*
//about.index
Route::get('about', ['as' => 'about.index', function () {
    return view('about');
}]);
*/
//將 Route 的內容搬至 AboutController 內
Route::get('about', ['as' => 'about.index','uses' => 'AboutController@index']);

/*
//news.index
Route::get('news', ['as' => 'news.index', function () {
    return view('news');
}]);
*/
//將 Route 的內容搬至 NewsController 內
Route::get('news', ['as' => 'news.index','uses' => 'NewsController@index']);
