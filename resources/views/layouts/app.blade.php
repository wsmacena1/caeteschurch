<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <style>
        a:hover{
            color: initial;

        }
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('header')
        <main>
            @yield('content')
            @yield('footer')
        </main>
    </div>
{{-- --------------------------------- Scripts --------------------------------}}
    <script>
        setTimeout(function() {
            $('#mfade').fadeOut('slow');
        }, 2000);
    </script>

    
    <script src="{{ asset('site/jquery.js') }}" ></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/26c17cef37.js" crossorigin="anonymous"></script>
    <script>
        window.onload=function() {
            document.getElementById('loading-mask').style.display='none';
        }
    </script>
</body>
</html>