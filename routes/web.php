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

//用户 登录 注册
Route::view('/log','cus.login');
Route::view('/regist','cus.regist');
Route::post('users/add', 'bc\UserControl@regist')->name('user.add');
Route::post('/user/check', 'bc\UserControl@login')->name('user.login');
Auth::routes();

Route::group(['namespace'=>'bc' ,'prefix' => 'bc','middleware'=>'auth'], function() {
    Route::get('tt', 'tagControl@nestableJson');

    Route::get('dashboard', function() {
        return view('bcon.dashboard');
    })->name('dashboard');
    
    Route::resource('artical', 'contentControl');
    
    Route::post('tags/quick_add', 'tagControl@quickAddTag')->name('qa_tag');
    
    Route::resource('tags', 'tagControl');

    Route::get('users','UserControl@UserList')->name('user');
    
    Route::get('user/edit/{id}','UserControl@userEdit')->name('user.edit');
    Route::post('user/update','UserControl@update')->name('user.update');
    Route::get('user/delete/{id}','UserControl@delete')->name('user.delete');
    

    
});
