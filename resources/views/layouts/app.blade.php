<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LVS') }}</title>

    <!-- Styles -->
    {{--<link href="{{url('/')}}/css/app.css" rel="stylesheet">--}}
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/material-kit.css" rel="stylesheet"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                        {{ config('app.name', 'LVS') }}
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
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
        @if (Auth::guest())
            <div></div>
        @else
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  Services
                </div>
                <div class="panel-body">
                  <div class="list-group">
                    <a href="{{url('/')}}/home/search/land" class="list-group-item active">
                      <h4 class="list-group-item-heading">Land Verification Service</h4>
                      <p class="list-group-item-text">
                        This section allows you verify a property by the given property number.
                      </p>
                    </a>
                    <a href="{{url('/')}}/user/{{Auth::id()}}/payments" class="list-group-item">
                      <h4 class="list-group-item-heading">Payments</h4>
                      <p class="list-group-item-text">
                        Check your payments history and print payment reports here.
                      </p>
                    </a>
                  </div>
                </div>
              </div>
            </div>

              @endif
              @yield('content')
      </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="{{url('/')}}/js/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{url('/')}}/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{url('/')}}/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{url('/')}}/js/material-kit.js" type="text/javascript"></script>
    <script src="{{url('/')}}/js/searchjs.js"></script>
</body>
</html>
