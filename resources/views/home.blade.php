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
                <div class="relative bg-white">
                    <div class="sticky rounded-full top-8 aspect-h-8 sm:aspect-w-16 sm:aspect-h-4">
                        <video autoplay muted loop controls>
                            <source src="https://lacar-mdx.com/files\LaCAR Marketing">
                        </video>
                    </div>
                </div>

                <!-- Blog section -->
                <div class="relative py-16 bg-gray-50 sm:py-24 lg:py-32">
                    <div class="relative">
                        <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                            <h2 class="text-base font-semibold tracking-wider uppercase text-cyan-600">Products & services
                            </h2>
                            <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                For routine genetic testing
                            </p>

                        </div>
                        <div
                            class="grid max-w-md gap-8 px-4 mx-auto mt-12 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-4 lg:max-w-7xl">
                            <div
                                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
                                <div class="flex-shrink-0">
                                    <img class="object-cover w-full h-48"
                                        src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTc1fHxzb2Z0d2FyZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                    <div class="flex-1">
                                        <a href="/software" class="block mt-2 cursor-pointer">
                                            <p class="text-xl font-semibold text-gray-900 hover:underline">
                                                Software
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                The perfect solution to automatically interpret your result from any qPCR
                                                machine.
                                            </p>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg cursor-pointer hover:scale-105">
                                <div class="flex-shrink-0">
                                    <img class="object-cover w-full h-48"
                                        src="https://images.unsplash.com/photo-1576156650572-91dc9f7b8f19?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjV8fGxhYnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                    <div class="flex-1">
                                        <a href="/services" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900 hover:underline">
                                                Services
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                The perfect solution to get customized constitutional genetic assays on
                                                demand.
                                            </p>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div
                                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg cursor-pointer hover:scale-105">
                                <div class="flex-shrink-0">
                                    <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1606206591513-adbfbdd7a177?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGxhYnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60
            " alt="">
                                </div>
                                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                    <div class="flex-1">
                                        <a href="#" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900 hover:underline">
                                                Kits & Consumables
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                The perfect solution to get any routine SNP directly from the primary sample
                                                with a CE-IVD solution.
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg cursor-pointer hover:scale-105">
                                <div class="flex-shrink-0">
                                    <img class="object-cover w-full h-48"
                                        src="https://images.unsplash.com/photo-1579154392429-0e6b4e850ad2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cGNyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                                        alt="">
                                </div>
                                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                                    <div class="flex-1">
                                        <a href="#" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900 hover:underline">
                                                Solutions
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                The perfect solution to handle low-medium amount of samples in a short time
                                                with LC-GENIE III, ease-up your routine genetic testing flow with qPCR
                                                platform and medium to very high throughput with a fully CE-IVD
                                                plug-and-play solution at a reasonable price with automated system.
                                            </p>
                                        </a>
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
                                Feel free to ask
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
