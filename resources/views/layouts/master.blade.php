<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title' , 'Home Page')</title>
  </head>
  <body>
    <div class="container">
      @yield('content')
      {{-- @yield('content' , View::make('view.name')) --}}
    </div>
    @section('script')
      <script type="text/javascript" src="app.js"></script>
    @show
  </body>
</html>
