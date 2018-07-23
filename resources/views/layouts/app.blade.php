<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Live Character Updates</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab|Glegoo:400,700|IM+Fell+DW+Pica:400,400i" rel="stylesheet"> 

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.2/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-oCbSd1BBeFjYEul9+YuTFSFhA19lHemUQj8KD8Cgdb8zRxt6nOVsdTW43N1G2Hf2" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    @yield('endscripts')
</body>
</html>
