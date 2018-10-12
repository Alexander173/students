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
    <script type="text/javascript">
        function addSelect(id)
        {
            var newSelect = document.createElement('select');
            var name = id.getAttribute("name");

            newSelect.setAttribute("name", name);
            newSelect.setAttribute("type", "number");
            newSelect.setAttribute("onchange","addSelect(this);")
            newSelect.className +="custom-select custom-select-sm";

            var parent = id.parentNode.id;

            newSelect.options[newSelect.options.length] = new Option("addMark",0);
            newSelect.options[newSelect.options.length] = new Option("2",2);
            newSelect.options[newSelect.options.length] = new Option("3",3);
            newSelect.options[newSelect.options.length] = new Option("4",4);
            newSelect.options[newSelect.options.length] = new Option("5",5);

            document.getElementById(parent).appendChild(newSelect);
        }
    </script>
</body>
</html>
