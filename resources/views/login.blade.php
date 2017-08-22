<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    {!! Html::image('img/favicon.png') !!}
    <title>Login</title>
    {!! Html::style('css/bootstrap.min.css') !!}

    <link href="" rel="stylesheet">
    {!! Html::style('css/bootstrap-theme.css') !!}
    {!! Html::style('css/elegant-icons-style.css') !!}
    {!! Html::style('css/font-awesome.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style-responsive.css') !!}
    {!! Html::style('js/html5shiv.js') !!}
    {!! Html::style('js/respond.min.js') !!}
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="{{route('login')}}" method="post">
        {!! csrf_field() !!}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
    </form>
</div>
</body>
</html>
