
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-5bFGNjwF8onKXzNbIcKR8ABhxicw+SC1sjTh6vhSbIbtVgUuVTm2qBZ4AaHc7Xr9" crossorigin="anonymous">

    <title>@yield('title', 'DefaultTitle') - Laravel Demo</title>
        @stack('stylesheets')
        @stack('scripts.header')

  </head>

  <body>

    @include('layouts/shared/_nav')

    <main role="main" class="container" style="padding-top: 10em;">

        <div class="row">
          <div class="col-lg-8">
            @yield('content')
          </div>
          <div class="col-lg-4">
            @section('sidebar')
              <ul>
                <li>item-sidebar1</li>
                <li>item-sidebar2</li>
                <li>item-sidebar3</li>
                <li>item-sidebar4</li>
                <li>item-sidebar5</li>
              </ul>
            @show
          </div>
        </div>

        @yield('footer')

        @stack('scripts.footer') 

    </main><!-- /.container -->

  </body>
</html>