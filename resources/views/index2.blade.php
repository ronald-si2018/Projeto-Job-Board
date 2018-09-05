<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Job Pro" />
        <meta name="keywords" content="Job Pro" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />

        <title>Laravel Blade Template - @yield('title')</title>
     
        
     
        
        
        <!--srart theme style -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fonts.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.carousel.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.theme.default.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flaticon.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" />


    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Início</a></li>
                            <li><a href="/sobre">Sobre</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
            {{ $home->content }}
        </div>
    </body>
</html>