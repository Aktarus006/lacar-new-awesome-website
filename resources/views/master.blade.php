<html>

<head>
    @include('head')
    @yield('meta')
</head>

<body class="">

    @include('layouts.navigation')
    <div class="mt-24">
        @yield('content')
        @include('layouts.footer')
    </div>
</body>


</html>