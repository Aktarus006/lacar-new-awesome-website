@extends('master')
@section('meta')
<title>Wlecome | Lacar-MDX</title>
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
            <div class="relative bg-white">
                <div class="rounded-full aspect-h-8 sm:aspect-w-16 sm:aspect-h-4 ">
                    <video autoplay muted loop>
                        <source src="https://lacar-mdx.com/files\LaCAR Marketing">
                    </video>
                </div>
            </div>

            <!-- Blog section -->
            <div
                class="relative py-16 transition duration-500 ease-in-out transform cursor-pointer bg-gray-50 sm:py-24 lg:py-32 hover:scale-105">
                <div class="relative">
                    <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                        <h2 class="text-base font-semibold tracking-wider uppercase text-cyan-600">Learn</h2>
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Helpful Resources
                        </p>
                        <p class="mx-auto mt-5 text-xl text-gray-500 max-w-prose">
                            Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc,
                            ullamcorper malesuada. Eleifend condimentum id viverra nulla.
                        </p>
                    </div>
                    <div
                        class="grid max-w-md gap-8 px-4 mx-auto mt-12 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                            <div class="flex-shrink-0">
                                <img class="object-cover w-full h-48"
                                    src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-cyan-600">
                                        <a href="#" class="hover:underline">
                                            Article
                                        </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">
                                            Boost your conversion rate
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                            accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos
                                            quis dolorum.
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
                                    <p class="text-sm font-medium text-cyan-600">
                                        <a href="#" class="hover:underline">
                                            Video
                                        </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">
                                            How to use search engine optimization to drive sales
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis
                                            asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut
                                            inventore optio animi., tempore temporibus quo laudantium.
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
                                    <p class="text-sm font-medium text-cyan-600">
                                        <a href="#" class="hover:underline">
                                            Case Study
                                        </a>
                                    </p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">
                                            Improve your customer experience
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum
                                            voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi
                                            cumque corporis perferendis hic.
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

            <!-- CTA Section -->
            <div class="relative bg-gray-900">
                <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                    <img class="object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixqx=AXQIJjKewm&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&sat=-100"
                        alt="">
                    <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-600"
                        style="mix-blend-mode: multiply;"></div>
                </div>
                <div
                    class="relative max-w-md px-4 py-12 mx-auto sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
                    <div class="md:ml-auto md:w-1/2 md:pl-10">
                        <h2 class="text-base font-semibold tracking-wider text-gray-300 uppercase">
                            Award winning support
                        </h2>
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            We’re here to help
                        </p>
                        <p class="mt-3 text-lg text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
                            sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat
                            quisque ut interdum tincidunt duis.
                        </p>
                        <div class="mt-8">
                            <div class="inline-flex rounded-md shadow">
                                <a href="#"
                                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-gray-900 bg-white border border-transparent rounded-md hover:bg-gray-50">
                                    Visit the help center
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