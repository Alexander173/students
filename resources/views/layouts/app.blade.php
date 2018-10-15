<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Students </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/addSelect.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .filter-form
        {
            padding-bottom: 10px;
        }
        .img-set
        {
            margin: 5px;
            position: relative;
            width: 200px;
            height: 200px;
        }
        .img-load-form
        {
            float:left;
            width: 23%;
            height: 20%;
        }
        .table-about
        {
            width: 70%;
        }
        .form-create-mark
        {
           width: 35%;
        }
    </style>
</head>
<body>
    <div id="app">

        @component('layouts.navigation')
        @endcomponent

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
