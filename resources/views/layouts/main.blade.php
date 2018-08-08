<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Demolaravel</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="">Stats</a>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::url() == url('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ Request::url() == url('/coins') ? 'active' : '' }}">
                    <a class="nav-link" href="/coins">Coins</a>
                </li>
                <li class="nav-item {{ Request::url() == url('/kontakt') ? 'active' : '' }}">
                    <a class="nav-link" href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

@yield('content')

</div><!-- /.container -->

<script src="/js/app.js"></script>
</body>
</html>
