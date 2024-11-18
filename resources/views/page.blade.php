<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name')}} - @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('deco/app.css') }}">
        <link rel="stylesheet" href="{{ asset('deco/mycss.css') }}">

    </head>
    <body>
            @include('navbar/navbar')
              @yield('content')

    {{--mon script et dans les view--}}
       @include('script')
    </body>
</html>
