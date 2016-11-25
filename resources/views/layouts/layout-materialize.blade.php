<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - 書瓶</title>

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" media="screen,projection">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            nav ul li a{
                color: #6d4c41;
            }
        </style>

        @yield('header')

    </head>
    <body>
        <!--
        <nav class="navbar p-y-2" style="background-color: #f6f6f1; box-shadow: none; color: #614e3c">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                      書瓶
                    </a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">首頁 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">找句子</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">找書</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">找書單</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-xs-right">
                        <li class="nav-item">
                            <a class="nav-link" href="#">註冊</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">登入</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        -->
        <nav class="z-depth-0">
            <div class="nav-wrapper brown-text text-darken-1 lime lighten-5">
                <a href="#" class="brand-logo center brown-text text-darken-1"><i class="material-icons">local_library</i>書瓶</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="#" class=" brown-text text-darken-1">找書</a></li>
                    <li><a href="#">找句子</a></li>
                    <li><a href="#">找書單</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">註冊</a></li>
                    <li><a href="#">登入</a></li>
                </ul>
            </div>
        </nav>
	    @yield('content')

    	@extends('layouts.footer')

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

        @yield('script')
    </body>
</html>