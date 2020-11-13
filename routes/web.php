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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('guest');

Auth::routes(['verify' => true]);


Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming_soon', 'HomeController@comingSoon')->name('coming_soon');


Route::get('/test', function() {
    $url = Storage::url('images/c9WR6sm4.png');
    return $url;
});

// Route::resource('/test', 'TestController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Posts
Route::resource('/post', 'PostController');
