<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <head>
    <meta property="og:url"                content="{{ env('APP_URL') }}" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Rasmad Ibnu Al'Kautsar" />
    <meta property="og:description"        content="Its all about me lol" />
    <meta property="og:image"              content="{{ asset('public/img/').'/bg-e.jpg' }}" />
    <meta name="keywords" content="rasmadibnu, Rasmad Ibnu, Rasmad Ibnu Alkautsar, Rasmad" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.css">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    
      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="google" content="notranslate" />
	<link rel="icon" href="{{ asset('public/img/favicon.png') }}" type="image/png" sizes="32x32">
    <title>Rasmad Ibnu</title>
  </head>
  <body>
    <div class="main">
        <div class="navbar-fixed">
          <nav class="z-depth-0 transparent">
              <div class="nav-wrapper">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                  <li><a href="{{ env('APP_URL') }}">Home</a></li>
                  <li><a href="{{ env('APP_URL').'about' }}">About</a></li>
                  <li><a href="{{ env('APP_URL').'skills' }}">Skills</a></li>
                  <li><a href="{{ env('APP_URL').'portfolio' }}">Portfolio</a></li>
                </ul>
              </div>
          </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ env('APP_URL') }}">Home</a></li>
            <li><a href="{{ env('APP_URL').'about' }}">About</a></li>
            <li><a href="{{ env('APP_URL').'skills' }}">Skills</a></li>
            <li><a href="{{ env('APP_URL').'portfolio' }}">Portfolio</a></li>
        </ul>
        @yield('content')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
  </body>
</html>