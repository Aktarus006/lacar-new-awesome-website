@extends('master')
@section('content')
<header
    class="relative flex items-center justify-center bg-fixed bg-gray-500 bg-center bg-no-repeat bg-auto sm:bg-cover bg-opacity-70 h-1/4 sm:h-2/3 bg-solutions">
    <div class="text-center">
        <h1 class="p-5 text-lg font-bold text-white uppercase sm:text-7xl text-shadow-lg">
            Our solutions
        </h1>
        <h2 class="p-5 text-base font-thin text-white sm:text-4xl text-shadow-xl">
            Unique CE-IVD solutions to ease up your workflow
        </h2>
    </div>
</header>

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
            <div
                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
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
                            <ul class="mt-3 ml-4 text-sm text-gray-300 list-disc">
                                <li> From 1 to 2 000 samples per year</li>
                                <li> 2 manipulations</li>
                                <li> 2' hands-on-time</li>
                                <li>
                                    < 45 minutes</li>
                            </ul>
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

            <div
                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
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
                            <br>

                            <ul class="mt-3 ml-4 text-sm text-gray-300 list-disc">
                                <li> From 1 to 15 000 samples per year</li>
                                <li> 2 manipulations</li>
                                <li> 5' hands-on-time</li>
                                <li>
                                    < 60 minutes</li>
                            </ul>
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

            <div
                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
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
                            <br>
                            <ul class="mt-3 ml-4 text-sm text-gray-300 list-disc">
                                <li> From 3 000 samples per year</li>
                                <li> No human manipulations</li>
                                <li> Highly reduced mistakes' risks</li>
                                <li>
                                    < 60 minutes</li>
                            </ul>

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
@endsection