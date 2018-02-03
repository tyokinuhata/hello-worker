@extends('layouts.app')

@section('content')
    <div id="works-top">
        <works-top></works-top>
    </div>
    <div class="jumbotron text-center mt-100">
        <h2>2017年12月01日(金) 00時00分00秒</h2>
        <h2 class="mt-10">出勤時間: 00時間00分00秒</h2>
        <div class="mt-30">
            <button class="btn btn-success mr-10">在宅</button>
            <button class="btn btn-primary mr-10">出勤</button>
            <button class="btn btn-default mr-10">退勤</button>
            <button class="btn btn-warning mr-10">停止</button>
            <button class="btn btn-info mr-10">再開</button>
            <button class="btn btn-danger">取消</button>
        </div>
    </div>
@endsection