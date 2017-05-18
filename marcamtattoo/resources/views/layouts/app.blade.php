<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Marcam Tattoo') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pontano+Sans" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script>
      (function() {
        var cx = '007804407528521877844:tpnxwvmxvh0';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
      })();
    </script>

    <!-- Fi Scripts -->
</head>
<body>
    <div id="app">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
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
                    <div id="logo_header" class="logo_big">
                      <a href="{{ url('/') }}">
                          <img id="logo" src="imatges/logo_marcam.png" alt="Logotip Marcam Tattoo" height="170" width="180">
                      </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul id="nav-left" class="nav navbar-nav navbar-left">
                    <ul class="nav navbar-nav">
                      <li class="{{ Request::segment(1) === 'nosaltres' ? 'active' : null }}">
                      <a href="{{ url('/nosaltres') }}">Nosaltres</a>
                      <li class="{{ Request::segment(1) === 'pressupost' ? 'active' : null }}">
                      <a href="{{ url('/pressupost') }}">Pressupost</a>
                    </ul>
                  </ul>
                  <!-- Rigth Side Of Navbar -->
                  <ul id="nav-right" class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                      <li class="{{ Request::segment(1) === 'tatuatges' ? 'active' : null }}">
                      <a href="{{ url('/tatuadors') }}">Tatuadors</a>
                      <li class="{{ Request::segment(1) === 'cercador' ? 'active' : null }}" id="lupa">
                      <!-- <a href="{{ url('/cercador') }}"><span class="glyphicon glyphicon-search"></span></a> -->
                      <gcse:search></gcse:search>
                    </ul>
                 </ul>
                </div>
            </div>
        </nav>

        @yield('content')



    </div>
    <!-- Footer section -->
        @include('layouts.footer')
    <!-- End footer section -->

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="js/libs.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    @yield('scripts')
</body>
</html>
