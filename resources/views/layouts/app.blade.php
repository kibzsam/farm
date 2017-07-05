<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="{{asset('css/custom/bootstrap-material-design.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/material+icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.7.22/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css">
    <link rel="stylesheet" href="{{asset('css/custom/jquery-bootgrid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Bootstrap Material Design -->
    <!-- Compiled and minified CSS -->
    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" href="{{asset('css/custom/bootstrap-material-design.min.css')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <!-- Scripts -->

    <script>
        window.Laravel=<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-color:  #EBF5FB" >
<div id="app">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: floralwhite;color: white;">
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
                <a class="navbar-brand" style="color: #3498DB ;" href="{{ url('/') }}">
                    Prime Farm
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
                        <li><a class="btn btn-default mdi mdi-account circle"  style="color:#3498DB; border-color: #3498DB; border-style: solid;" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="btn btn-info btn-raised mdi mdi-person add" style="color: white" href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="{{url('/home')}}" class="btn btn mdi mdi-star" style="color:#3498DB;border-color: #3498DB;border-style: solid;" >Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="btn bt-raised  mdi mdi-account circle " style="background-color: #3498DB;color:white">
                                <span class=""></span>{{ Auth::user()->name }} <span></span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/logout') }}" style="background-color: whitesmoke" class="btn btn-default mdi mdi-account circle" data-toggle="tooltip" title="LOGOUT"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> logout

                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                            </form>
                        </li>



                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
<script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<script>
    $('body').bootstrapMaterialDesign();
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
