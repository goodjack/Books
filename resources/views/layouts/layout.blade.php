<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - 書瓶</title>

        <!-- Material Design fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">

        @yield('header')

    </head>
    <body>
        <nav class="navbar p-y-2" style="background-color: #f6f6f1; box-shadow: none; color: #614e3c">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                      書瓶
                    </a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">首頁 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">找句子</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/books">找書</a>
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
                            <a class="nav-link" href="/login">登入</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	    @yield('content')

    	@extends('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
        <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
        <script>
          $('body').bootstrapMaterialDesign();
        </script>

        @yield('script')
    </body>
</html>