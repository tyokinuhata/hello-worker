<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>hello, worker</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top p-navbar">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="./image/logo.png" alt="" class="logo mt-10">
                        <a class="navbar-brand" href="{{ url('/') }}">hello, worker</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">トップ</a></li>
                            @if(Config::get('mode') === 'works')
                                <li><a href="{{ url('/works') }}">勤怠管理トップ</a></li>
                            @else
                                <li><a href="{{ url('/works') }}">管理画面トップ</a></li>
                                <li><a href="{{ route('register') }}">サインアップ</a></li>
                            @endif
                            @guest
                                <li><a href="{{ route('login') }}">サインイン</a></li>
                            @else
                                <li><a href="{{ url('/works/payslip') }}">給与明細</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('signout').submit();">サインアウト</a></li>
                                <form id="signout" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <div class="footer">
            Copyright 2017 - 2018 ASS All Rights Reserved
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
