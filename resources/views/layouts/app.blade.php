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
                                <div class="mojmeni">
                                @if (!Auth::guest())
                                <a href="{!! url('/tasks/create') !!}">Dodaj događaj</a>
                                <a href="{!! url('/tasks/index') !!}">Svi događaji</a>
                                <a href="{!! url('/complete') !!}">Aktivni događaji</a>
                                <a href="{!! url('/incomplete') !!}">Završeni događaji</a>
                                @else
                                <a href="dogadjaji">Događaji</a>
                                <a href="aboutus">O nama</a>
                                <a href="contact">Kontakt</a>
                                @endif
                                </div>
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
                @if (!Auth::guest())
                <li class="sidebar-brand">
                    <a href="{!! url('/tasks/create') !!}"><span class="glyphicon glyphicon-plus" aria-label="true" style="margin-left: -32px;"></span>  Dodaj događaj</a>
                </li>
                <li>
                    <a href="{!! url('/tasks/index') !!}">Svi događaji</a>
                </li>
                <li>
                    <a href="{!! url('/complete') !!}">Aktivni događaji</a>
                </li>
                <li>
                    <a href="{!! url('/incomplete') !!}">Završeni događaji</a>
                </li>
                @else
                <li>
                    <a href="dogadjaji">Događaji</a>
                </li>
                <li>
                    <a href="aboutus">O nama</a>
                </li>
                <li>
                    <a href="contact">Kontakt</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
