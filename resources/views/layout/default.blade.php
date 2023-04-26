<html>
<head>

    <title>Guest Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include('includes.header')
    <div class="flex justify-center items-center">
        @yield('content')

    </div>




</body>


</html>
