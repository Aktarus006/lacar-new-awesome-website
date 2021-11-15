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

<script src="https://unpkg.com/@markusantonwolf/ta-gallery@latest/dist/js/ta-gallery-next.min.js"></script>

</html>
