<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/public/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/public/css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="/public/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="/public/css/jquery-ui.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <script src="/public/js/jquery-3.3.1.min.js"></script>
    <script src="/public/js/jquery-ui.js"></script>
    <script src="/public/js/popper/popper.js"></script>
    <script src="/public/js/bootstrap/bootstrap.js"></script>
    <script src="/public/js/main.js"></script>
    <title>Стремись, учись и достигай.</title>
</head>
<body>
<div id="wrap">
    <div class="form_mask"></div>
    <div class="content">
        <header>
            <div class="logo col-3">
                <img src="/public/images/logo.png">
            </div>
            <div class="quote col-6">
                <span>Учись,</span>
                <span>Стремись,</span>
                <span>Достигай!</span>
            </div>
            @guest
                <div class="auth col-3">
                    <div class="btn btn_login">Вход</div>
                    <a href="/registration/" class="btn btn_reg">Регистрация</a>
                </div>
            @else
                <div class="auth col-3">
                    <a href="/logout/" class="btn">Выход</a>
                    <a href="/personal/" class="btn btn_reg">Личный кабинет</a>
                </div>
            @endguest
                <div class="form_login">
                    <form class="form-horizontal" action="/auth/" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" placeholder="Имя пользователя" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control"  name="password" placeholder="Пароль" value="">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Запомнить
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn">Войти</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clr"></div>
        </header>
        <div class="menu">
            <ul>
                @foreach($menu as $key => $val)
                    <li>
                        <a href="{{$val->link}}">{{$val->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="page_content">
            @yield('content')
        </div>
        <footer>
            <span>2018 Copyright©</span>
        </footer>
    </div>
</div>
</body>
</html>