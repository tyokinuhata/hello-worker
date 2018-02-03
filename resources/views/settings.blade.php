@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-100">
        <form action="">
            <div class="text-left">
                <label for="name" class="_label text-right">ユーザ名</label>
                <input type="text" value="hoge" id="name" name="name" class="form-control form mt-10">
            </div>
            <div class="text-left">
                <label for="user_id" class="_label text-right">ユーザID</label>
                <input type="text" value="hoge" id="user_id" name="user_id" class="form-control form mt-10">
            </div>
            <div class="text-left">
                <label for="email" class="_label text-right">メールアドレス</label>
                <input type="text" value="hoge@hoge.com" id="email" name="email" class="form-control form mt-10">
            </div>
            <div class="text-left">
                <label for="password" class="_label text-right">パスワード</label>
                <input type="password" value="hogehoge" id="password" name="password" class="form-control form mt-10">
            </div>
            <div class="text-left">
                <label for="password_again" class="_label text-right">パスワード（再入力）</label>
                <input type="password" value="hogehoge" id="password_again" class="form-control form mt-10">
            </div>
            <div class="text-right">
                <button class="btn btn-primary mt-10">変更</button>
            </div>
        </form>
    </div>
@endsection