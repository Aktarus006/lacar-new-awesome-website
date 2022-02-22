@extends('master')
@section('content')
    <header class="relative flex items-center justify-center h-1/4 sm:h-2/3">
        <div class="absolute top-0 left-0 w-full h-full">
            <img class="object-cover object-center w-full h-full scale-50" src="/images/lacar-10.jpg" />
        </div>

        <div class="z-10 text-center">
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
    @include('layouts.contactForm', ['subject' => 'Services', 'description' => 'You need to develop any SNP assay ? Don’t
    hesitate to contact us. We’ll do anything we can to help you.', 'title' => 'Let’s work together'])
@endsection
