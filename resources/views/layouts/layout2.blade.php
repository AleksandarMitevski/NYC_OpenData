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
            <div class="w-1/6 bg-cover border-r-2 border-black"  style="
         background-image:linear-gradient(to bottom, transparent 50%, black 100%),
          url(' {{ asset('images/NYCpic.jpg') }} '); height: 915px;
           ">
                @include('components.menu') 
             </div>

            <div class="w-5/6 bg-gray-300">
                @yield('content')
            </div>

        </div>

    </body>
</html>