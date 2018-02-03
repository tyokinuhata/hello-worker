@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div>2017年12月01日(金) 00時00分00秒</div>
        <div>出勤時間: 00時間00分00秒</div>
        <div>
            <input type="checkbox" id="remote">
            <label for="remote">リモート</label>
            <button class="btn btn-primary">出勤</button>
            <button class="btn btn-default">退勤</button>
            <button class="btn btn-warning">停止</button>
            <button class="btn btn-info">再開</button>
            <button class="btn btn-danger">取消</button>
        </div>
    </div>
@endsection