<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{ asset('../lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('../css/azia.css') }}">
    <style>
      body {
        overflow-x: hidden
      }
    </style>
    @stack( 'styles' )

  </head>
  <body>

    @include('dashboard.partials.navbar')

    <div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
      @yield('content')
    </div>

    <div class="az-footer ht-40">
      <div class="container ht-100p pd-t-0-f">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div><!-- container -->
    </div><!-- az-footer -->

    <script src="{{ asset('../lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('../lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../js/azia.js') }}"></script>
    <script src="{{ asset('../js/jquery.cookie.js" type="text/javascript') }}"></script>
    @stack( 'scripts' )
  </body>
</html>
