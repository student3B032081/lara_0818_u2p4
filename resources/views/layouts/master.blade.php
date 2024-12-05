<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon"
              href="{{asset('assets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src=... ></script>
        <!-- Google fonts-->
        <link href=... />
        <link href=... />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
         @include('layouts.partials.navigation')
        <!-- Page Header-->
        <!-- Main Content-->
        @yield('content')
        <!-- Footer-->
        @include('layouts.partials.footer')
        <!-- Bootstrap core JS-->
        <script src=... ></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
