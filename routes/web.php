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
    return view('cus.index');
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

    Route::get('users','UserControl@UserList')->name('user');
    Route::post('users/add', 'UserControl@regist')->name('user.add');
    Route::get('user/edit/{id}','UserControl@userEdit')->name('user.edit');
    Route::post('user/update','UserControl@update')->name('user.update');
    Route::get('user/delete/{id}','UserControl@delete')->name('user.delete');
    

    
});
