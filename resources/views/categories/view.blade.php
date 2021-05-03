@extends('master')

@section('content')
<div class="pb-20 bg-gradient-to-b from-white to-gray-50">
    <div class="relative flex items-center w-screen pt-10 ">
        <h1 class="mx-auto text-lg font-extrabold md:text-4xl">{{ $category->name }}</h1>
    </div>
    <div class="relative w-24 mx-auto mt-5 mb-5 bg-yellow-500">
        <div class="px-3 py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
        </div>
    </div>
</div>
<div class="bg-white lg:pb-24">
    <div class="pb-16 from-gray-900 to-indigo-600 lg:pb-0 lg:z-10 lg:relative bg-gradient-to-br">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-4 lg:gap-8">
            <div class="relative lg:-my-8 lg:col-span-2">
                <div aria-hidden="true" class="absolute inset-x-0 top-0 bg-white h-1/2 lg:hidden"></div>
                <div class="max-w-md px-4 mx-auto sm:max-w-4xl sm:px-6 lg:p-0 lg:h-full ">
                    <div
                        class="overflow-hidden shadow-xl aspect-w-10 aspect-h-6 rounded-xl sm:aspect-w-16 sm:aspect-h-7 lg:h-full lg:w-full">
                        <img class="object-fill" src=" {{ $category->image }}" alt="">
                    </div>
                </div>
            </div>
            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                    <blockquote>
                        <div>

                            <div class="text-xl text-gray-300 uppercase font-base">GENETIC THROMBOSIS</div>
                            <div class="text-4xl font-semibold text-white">FAST AND EASY DETECTION</div>
                            <div class="relative w-16 mt-5 mb-5 bg-yellow-500">
                                <div class="px-3 py-0.5 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                </div>
                            </div>
                            <div class="mt-6 text-xl text-indigo-100">
                                {{ strip_tags(html_entity_decode($category->description)) }}
                            </div>
                        </div>

                    </blockquote>
                </div>
            </div>
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
            @foreach($category->kits as $kit)
            <a href="/p/{{ $kit['slug'] }}">
                <div class="flex items-center rounded-full hover:text-white hover:bg-yellow-500">
                    <button type="button"
                        class="inline-flex items-center p-1 text-white bg-yellow-500 border border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-400">
                        <!-- Heroicon name: solid/plus -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
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
            @endforeach
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
                <div>
                    <a href="#" class="inline-block">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Article
                        </span>
                    </a>
                </div>
                <a href="#" class="block mt-4">
                    <p class="text-2xl font-semibold text-gray-900">
                        SIMPLICITY
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                        No laborious DNA extraction procedure
                    </p>
                </a>
                <div class="flex items-center mt-6">
                    <div class="flex-shrink-0">
                        <a href="#">
                            <span class="sr-only">Paul York</span>
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a href="#">
                                Paul York
                            </a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                            <time datetime="2020-03-16">
                                Mar 16, 2020
                            </time>
                            <span aria-hidden="true">
                                &middot;
                            </span>
                            <span>
                                6 min read
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <a href="#" class="inline-block">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-pink-100 text-pink-800">
                            Video
                        </span>
                    </a>
                </div>
                <a href="#" class="block mt-4">
                    <p class="text-2xl font-semibold text-gray-900">
                        RAPIDITY
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                        1 minute hand-time
                        <br>
                        25 minutes amplification + detection
                    </p>
                </a>
                <div class="flex items-center mt-6">
                    <div class="flex-shrink-0">
                        <a href="#">
                            <span class="sr-only">Dessie Ryan</span>
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a href="#">
                                Dessie Ryan
                            </a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                            <time datetime="2020-03-10">
                                Mar 10, 2020
                            </time>
                            <span aria-hidden="true">
                                &middot;
                            </span>
                            <span>
                                4 min read
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div>
                    <a href="#" class="inline-block">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                            Case Study
                        </span>
                    </a>
                </div>
                <a href="#" class="block mt-4">
                    <p class="text-2xl font-semibold text-gray-900">
                        EFFICIENCY
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                        Perfect distinction of the heterozygote
                    </p>
                </a>
                <div class="flex items-center mt-6">
                    <div class="flex-shrink-0">
                        <a href="#">
                            <span class="sr-only">Easer Collins</span>
                            <img class="w-10 h-10 rounded-full"
                                src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a href="#">
                                Easer Collins
                            </a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                            <time datetime="2020-02-12">
                                Feb 12, 2020
                            </time>
                            <span aria-hidden="true">
                                &middot;
                            </span>
                            <span>
                                11 min read
                            </span>
                        </div>
                    </div>
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
        <div
            class="grid max-w-lg gap-5 mx-auto mt-12 transition duration-500 ease-in-out transform lg:grid-cols-3 lg:max-w-none hover:scale-105">
            <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                <div class="flex-shrink-0">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                        alt="">
                </div>
                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-yellow-600">
                            <a href="#" class="hover:underline">
                                Article
                            </a>
                        </p>
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
                    <div class="flex items-center mt-6">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Roel Aufderehar</span>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">
                                    Roel Aufderehar
                                </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16">
                                    Mar 16, 2020
                                </time>
                                <span aria-hidden="true">
                                    &middot;
                                </span>
                                <span>
                                    6 min read
                                </span>
                            </div>
                        </div>
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
                        <p class="text-sm font-medium text-yellow-600">
                            <a href="#" class="hover:underline">
                                Video
                            </a>
                        </p>
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
                    <div class="flex items-center mt-6">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Brenna Goyette</span>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">
                                    Brenna Goyette
                                </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-10">
                                    Mar 10, 2020
                                </time>
                                <span aria-hidden="true">
                                    &middot;
                                </span>
                                <span>
                                    4 min read
                                </span>
                            </div>
                        </div>
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
                        <p class="text-sm font-medium text-yellow-600">
                            <a href="#" class="hover:underline">
                                Case Study
                            </a>
                        </p>
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
                    <div class="flex items-center mt-6">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">Daniela Metz</span>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#" class="hover:underline">
                                    Daniela Metz
                                </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-02-12">
                                    Feb 12, 2020
                                </time>
                                <span aria-hidden="true">
                                    &middot;
                                </span>
                                <span>
                                    11 min read
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.contactForm', ['subject' => 'COVID'])
@endsection