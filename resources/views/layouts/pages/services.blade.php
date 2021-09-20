@extends('master')
@section('content')
    <header
        class="relative flex items-center justify-center bg-fixed bg-gray-500 bg-center bg-no-repeat bg-auto sm:bg-cover bg-opacity-70 h-1/4 sm:h-2/3 bg-services">

        <div class="text-center">
            <h1 class="p-5 text-lg font-bold text-white uppercase sm:text-7xl text-shadow-lg">
                Get any SNP you need
            </h1>
            <h2 class="p-5 text-base font-thin text-white sm:text-4xl text-shadow-xl">
                Constitutional genetic assays on demand
            </h2>
        </div>

    </header>
    <div class="mb-10 text-center">
        <h1 class="p-5 mt-10 text-lg text-black uppercase font-base sm:text-4xl">
            Services on demand
        </h1>
        <div class="w-24 py-1 mx-auto my-5 bg-yellow-500"></div>
        <p class="mx-5 text-lg font-light">LaCAR also develops <span class="font-bold">customized constitutional genetic
                assays</span> on demand. Feel free
            to <span class="font-bold">contact us</span> for more information</p>
    </div>
    @include('layouts.contactForm', ['subject' => 'Services'])
@endsection
