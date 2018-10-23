<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Students </title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" 
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/addSelect.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles --> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tree.css') }}" rel="stylesheet">

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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.tree li').css('visibility', 'visible');
        });

        $(function () {
            $('.tree li').hide();
            $('.tree li:first').show();
            $('.tree li').on('click', function (e) {
                var children = $(this).find('> ul > li');
                if (children.is(":visible")) children.hide('fast');
                else children.show('fast');
                e.stopPropagation();
            });
        });
    </script>
</body>
</html>
