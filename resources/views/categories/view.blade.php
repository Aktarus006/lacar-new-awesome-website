@extends('master')
@section('meta')
    <title>{{ $category->meta_title }} | Lacar-MDX</title>
@endsection

@section('content')
    {{ Breadcrumbs::render('category', $category) }}

    <div class="relative w-full bg-gray-800">
        <div class="h-56 bg-yellow-500 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
            <img class="object-cover w-full h-full"
                src="{{ asset(Voyager::image($category->image)) != '' ? asset(Voyager::image($category->image)) : '' }} "
                alt="">
        </div>
        <div class="relative px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-16">
            <h1 class="text-2xl font-extrabold text-yellow-500 md:text-5xl md:ml-auto md:w-1/2 md:pl-10">
                {{ $category->name }}</h1>
            <div class="mt-2 md:ml-auto md:w-1/2 md:pl-10">
                {{-- <h2 class="text-base font-semibold tracking-wider text-gray-300 uppercase">
                    Genetic Thrombosis
                </h2> --}}
                <p class="mt-2 text-xl font-bold tracking-tight text-white sm:text-2xl">
                    Fast and easy detection
                </p>
                <p class="mt-3 text-lg text-gray-300">
                    {{ strip_tags(html_entity_decode($category->description)) }}
                </p>

            </div>
        </div>
    </div>

    <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    KITS
                </h2>
                <div class="relative w-16 mt-5 mb-5 bg-yellow-500">
                    <div class="px-3 py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    </div>
                </div>
                <div class="space-y-4">
                    @foreach ($category->kits as $kit)
                        <div class="w-screen max-w-lg">
                            <a href="/p/{{ $kit['slug'] }}">
                                <div class="flex items-center rounded-full hover:text-white hover:bg-yellow-500">
                                    <button type="button"
                                        class="inline-flex items-center p-1 text-white bg-yellow-500 border border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                                        <!-- Heroicon name: solid/plus -->
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <p class="inline-flex items-center p-1 ml-3 text-lg font-medium ">
                                        {{ $kit['name'] }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
            <div>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                    LACAR's kits improve the efficiency of the process
                </p>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Reliable genotyping
                </h2>
            </div>
            <div class="grid gap-16 pt-12 mt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                <div>
                    <div class="inline-box">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-500 text-white w-12 h-12">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="block mt-4">
                        <p class="text-2xl font-semibold text-gray-900">
                            SIMPLICITY
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            No laborious DNA extraction procedure
                        </p>
                    </div>

                </div>

                <div>
                    <div class="inline-block">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full w-12 h-12 text-sm font-medium bg-yellow-500 text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="block mt-4">
                        <p class="text-2xl font-semibold text-gray-900">
                            RAPIDITY
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            1 minute hand-time
                            <br>
                            25 minutes amplification + detection
                        </p>
                    </div>

                </div>

                <div>
                    <div class="inline-block w-1/2 mx-auto">
                        <span
                            class="inline-flex justify-center items-center px-3 py-0.5 rounded-full text-sm font-medium bg-yellow-500 text-white w-12 h-12">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="block mt-4">

                        <p class="text-2xl font-semibold text-gray-900">
                            EFFICIENCY
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            Perfect distinction of the heterozygote
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="relative px-4 pt-16 pb-20 bg-gray-50 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-lg font-light tracking-tight text-gray-900 sm:text-3xl">
                    3 DIFFERENT SOLUTIONS TO FIT WITH ALL LABS' VOLUMES
                </h2>
                <div class="relative w-24 mx-auto mt-5 bg-yellow-500">
                    <div class="px-3 py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    </div>
                </div>
            </div>
            <div class="grid max-w-lg gap-5 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-48"
                            src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                            alt="">
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    LC-GENIE III
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    Get started with your genetic portfolio or outsource low-medium throughput from busy
                                    qPCR platforms with a fully CE-IVD solution from the primary tube to the end results
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-48"
                            src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                            alt="">
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">

                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    qPCR PLATFORMS
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    CE-IVD solution from the primary tube to the end results available on many already
                                    established qPCR platforms
                                </p>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-48"
                            src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                            alt="">
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                        <div class="flex-1">

                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    AUTOMATISATION
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    Unique CE-IVD fully automated system from the primary tube to the end results at a
                                    reasonable price
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.contactForm', ['subject' => 'Request for : '.$category->name, 'description' => 'Feel free to
    contact us !', 'title' => 'Want to know more about '.$category->name.'?'])
@endsection
