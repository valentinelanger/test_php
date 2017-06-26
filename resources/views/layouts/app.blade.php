<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LYDIA TEST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" media="all" href="/public/css/app.css">
    </head>
    <body>

      <h1>this is the layout</h1>

      @yield('content')

      @include('layouts.footer')

      <p>we are after the yield part</p>
    </body>
</html>
