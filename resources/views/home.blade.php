@extends('master')
@section('meta')
    <title>Welcome | Lacar-MDX</title>
@endsection


@section('content')
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <main>
                <div class="relative bg-gray-30">
                    <div class="relative">
                        @include('layouts.slider')
                    </div>
                </div>
                <div class="relative hidden bg-white lg:block">
                    <div class="sticky rounded-full top-8 aspect-h-8 sm:aspect-w-16 sm:aspect-h-4">
                        <video autoplay muted loop controls>
                            <source src="/videos/LaCAR_4.mp4">
                        </video>
                    </div>
                </div>

                <!-- Blog section -->
                <div class="relative py-16 bg-gray-50 sm:py-24 lg:py-32">
                    <div class="relative">
                        <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                            <h2 class="text-base font-semibold tracking-wider text-lacar-700 uppercase">Products & services
                            </h2>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                For routine genetic testing
                            </p>

                        </div>
                        <div
                            class="grid max-w-md gap-8 px-4 mx-auto mt-12 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-4 lg:max-w-7xl">
                            @foreach ($cat as $category)
                                <x-home-category-box :category="$category" />
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- team section -->

                <x-team-list :teams="$teams" />



                <!-- CTA Section -->
                <div class="relative bg-gray-900">
                    <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                        <img class="object-cover w-full h-full" src="{{ asset('/images/lacar-55.jpg') }}" alt="">

                    </div>
                    <div
                        class="relative max-w-md px-4 py-12 mx-auto sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                        <div class="md:ml-auto md:w-1/2 md:pl-10">
                            <h2 class="text-base font-semibold tracking-wider text-gray-300 uppercase">
                                Feel free to ask
                            </h2>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                                We’re here to help
                            </p>
                            <p class="mt-3 text-lg text-gray-300">
                                You have a question regarding our products ? You want to know more about our method ?
                                Fill in the form and we’ll get back to you as soon as possible.
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex rounded-md shadow">
                                    <a href="/contact"
                                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-gray-900 bg-white border border-transparent rounded-md hover:bg-gray-50">
                                        Contact us
                                        <!-- Heroicon name: solid/external-link -->
                                        <svg class="w-5 h-5 ml-3 -mr-1 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                            <path
                                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
