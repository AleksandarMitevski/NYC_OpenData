<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NYC Open Data</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href=" {{ asset('css/main.css') }} ">

        <link rel="stylesheet" type="text/css" href=" {{ asset('css/Custom.css') }} ">

        <script src=" {{ asset('js/Chart.js') }} " ></script>

        <style type="text/css">
            .show {display:block;}
            body{
                height: 100%;
            }
        </style>

    </head>
    <body>

        <div class="flex">
            @yield('content')
        </div>

    </body>
</html>

<!-- <script src=" {{ asset('js/charts/bar.js') }} "></script>
<script src="{{ asset('js/charts/line.js') }}"></script> -->