<?php

// 共通
Route::get('/', function () {
    return view('welcome');
});

Route::get('/settings', function () {
    return view('settings');
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