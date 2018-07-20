<html>
    <head>
        <title>UMN - Swinburne Farm Manager @yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css')  }}">
        <link rel="stylesheet" href="{{ URL::to('css/app.css')  }}">
        <script src="{{ URL::to('js/popper.min.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.min.js')  }}"></script>
    </head>
    <body>
      <div class="container">
          @yield('content')
        </div>
    </body>
</html>
