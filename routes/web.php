<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    $url = Storage::url('images/tesla_wallpaper.jpg');
    return view('welcome', compact('url'));
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function() {
    $url = Storage::url('images/tesla_wallpaper.jpg');
    return $url;
});

Route::resource('/test', 'TestController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
