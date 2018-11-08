<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>App Name - @yield('title')</title>

    </head>
    <body>
      <header>
        <div class="logo">
          <img src="../../logo.jpg" width="auto" height="100%">
        </div>
        @include('layout.aside')
      </header>
    <main>
            @yield('content')
        </main>
      

    </body>
    <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
</html>
