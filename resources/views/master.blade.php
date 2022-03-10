<html>

<head>
    @include('head')
    @yield('meta')
</head>

<body class="">

    @include('layouts.navigation')

    <div class="mt-24">
        @if ($success = session('success'))
            <div class="w-full p-5 bg-green-100 rounded-md">
                <div class="flex justify-between">
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="flex-none w-4 h-4 text-green-500 fill-current">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                        </svg>
                        <div class="flex-1 text-sm font-medium leading-tight text-green-700">{{ $success }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
        @include('layouts.footer')
    </div>
</body>

<script src="https://unpkg.com/@markusantonwolf/ta-gallery@latest/dist/js/ta-gallery-next.min.js"></script>

</html>
