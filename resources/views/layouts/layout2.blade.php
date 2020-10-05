<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                background-color: #edf2f7;
            }

            #map{
              height: 100%;
              overflow: hidden;
            }

            .modal {
              transition: opacity 0.25s ease;
            }
            body.modal-active {
              overflow-x: hidden;
              overflow-y: visible !important;
            }
        </style>

    </head>
    <body>

        <div class="flex">
            <div class="w-1/6 bg-gray-800">
                @include('components.menu') 
            </div>

            <div class="w-5/6">
                @yield('content')
            </div>

        </div>

    </body>
</html>