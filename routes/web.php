<?php
Route::get('/', function () {
    return view('welcome');
});

// 勤怠管理
Route::get('/works', function () {
    return view('works.top');
});

// 管理画面
Route::get('/admin', function () {
    return view('admin.top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
