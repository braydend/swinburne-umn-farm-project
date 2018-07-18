<html>
    <head>
        <title>UMN - Swinburne Farm Manager @yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css')  }}">
        <script src="{{ URL::to('js/popper.min.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.min.js')  }}"></script>
    </head>
    <body>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{  URL::to('/')  }}">Farm Manager</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{  URL::to('/')  }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Need to decide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">What these links should be</a>
              </li>
            </ul>
          </div>
          </nav>
          @yield('content')
        </div>
    </body>
</html>
