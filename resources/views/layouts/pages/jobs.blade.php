@extends('master')

@section('content')
    <div class="relative flex items-center justify-center shadow-lg h-1/2">
        <img class="object-cover w-full h-full"
            src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80"
            alt="Flower and sky" />

        <div class="absolute text-center">
            <h1 class="p-5 text-lg font-bold text-white sm:text-7xl text-shadow-lg">
                OUR TEAM
            </h1>
            <h2 class="p-5 text-base font-thin text-white sm:text-4xl text-shadow-xl">
                Join us !
            </h2>
        </div>
    </div>

    <div class="overflow-hidden bg-white">
        <div class="relative px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="absolute top-0 bottom-0 hidden w-screen lg:block bg-gray-50 left-3/4"></div>
            <div class="mx-auto text-base max-w-prose lg:max-w-none">
                <h3 class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">JOB OPPORTUNITIES
                </h3>
                <div class="bg-yellow-500 py-0.5 w-16 mt-5"></div>
            </div>
        </div>
    </div>

@endsection
