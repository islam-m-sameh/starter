<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome')->with(['name'=>'Islam','data'=>22]);
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('b');

Route::namespace('Front')->group(function () {

    Route::get('users','UserController@showUserName');
    Route::get('index','UserController@getIndex');
});

/*Route::group(['prefix'=>'users', 'middleware'=>'auth'],function(){
    Route::get('show','UserController@showUserName');
});*/

Route::group(['namespace'=>'Admin'],function(){
    Route::get('second','SecondController@showString')->middleware('auth');
    Route::get('second2','SecondController@showString2');
});

Route::resource('news', 'NewsController');


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
