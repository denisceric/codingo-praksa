<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dnevnik</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/sidebar.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Dnevnik = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        DNEVNIK
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Prijava</a></li>
                            <li><a href="{{ route('register') }}">Registracija</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Odjavi se
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            @foreach($users as $user)
                <li>
                    <a href="{{ route('admin/user') }}{{$user->id}}">{{$user->name}}</a>
                </li>
            @endforeach
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<div class="container">
<h1>Dobro došli, 
@if (!Auth::guest())
{{Auth::user()->name}}!</h1>
<hr>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>

@else
<hr>
Ovdje možete napraviti dnevnik rada.
@endif
</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
