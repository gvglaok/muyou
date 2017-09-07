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


Route::group(['namespace'=>'bc' ,'prefix' => 'bc','middleware'=>'auth'], function() {
    Route::get('tt', 'tagControl@nestableJson');

    Route::get('dashboard', function() {
        return view('bcon.dashboard');
    })->name('dashboard');
    
    Route::resource('artical', 'contentControl');
    
    Route::post('tags/quick_add', 'tagControl@quickAddTag')->name('qa_tag');
    
    Route::resource('tags', 'tagControl');

    Route::get('users','UserControl@UserList');
    Route::post('users/add', 'UserControl@UserAdd')->name('user.add');
    
});
