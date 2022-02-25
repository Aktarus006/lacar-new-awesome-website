@extends('master')
@section('content')
    <header class="relative flex items-center justify-center h-1/4 sm:h-2/3">
        <div class="absolute top-0 left-0 w-full h-full">
            <img class="object-cover object-top w-full h-full" src="/images/solutions-banner.jpg" />
        </div>
        <div class="z-10 text-center">
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
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-48" src="{{ asset('images/lacar-35.jpg') }}" alt="">
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
                                <ul class="mt-3 ml-4 text-sm text-gray-300 list-disc">
                                    <li> From 1 to 2 000 samples per year</li>
                                    <li> 2 manipulations</li>
                                    <li> 2' hands-on-time</li>
                                    <li>
                                        < 45 minutes</li>
                                </ul>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg ">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-48" src="{{ asset('images/lacar-22.jpg') }}" alt="">
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

                    </div>
                </div>

                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg ">
                    <div class="flex-shrink-0">
                        <img class="object-cover object-bottom w-full h-48" src="{{ asset('images/lacar-63.jpg') }}"
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
