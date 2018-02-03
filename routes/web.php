<?php
Route::get('/', function () {
    return view('welcome');
});

// 勤怠管理
Route::get('/works', 'WorksController@index');

Route::get('/works/payslip', function () {
    Config::set(
        ['mode' => 'works'
    ]);
    return view('works.payslip');
});

// 管理画面
Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
