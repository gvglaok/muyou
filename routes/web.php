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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace'=>'bc' ,'prefix' => 'bc'], function() {
    Route::get('tt', function() {
        return view('layouts.bcon');
    });

    Route::get('dashboard', function() {
        return view('bcon.dashboard');
    })->name('dashboard');
    
    Route::resource('artical', 'articalControl');

    Route::view('classmenu','bcon.classMenu');
});
