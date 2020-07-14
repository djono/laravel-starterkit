<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Laravel Starter Kit</title>

     <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
     <link rel="manifest" href="/favicon/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">

     <!-- Fonts -->
     <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
     <link href="/css/app.css" rel="stylesheet" />
     @yield('css')
     @yield('js')
     <link href="/css/carousel.min.css" rel="stylesheet" />
     <script src="/js/app.js" type="text/javascript"></script> 
     </head>

<body>
     <header>
          @include('includes.front-menu')
     </header>

     <main role="main">
          @yield('content')

          <!-- FOOTER -->
          <footer class="container">
               <p class="float-right"><a href="#">Back to top</a></p>
               <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
     </main>
     <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
     </script>
     <script>
     window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
     </script>
     <script src="../assets/dist/js/bootstrap.bundle.js"></script> -->
</body>

</html>