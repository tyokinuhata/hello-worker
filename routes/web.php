<?php
Route::get('/', function () {
    return view('welcome');
});

// 勤怠管理
Route::get('/works', 'WorksController@index');

Route::get('/works/payslip', function () {
    return view('works.payslip');
});

// 管理画面
Route::get('/admin', function () {
    return view('admin.top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
