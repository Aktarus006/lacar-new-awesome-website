<div class="fixed inset-x-0 top-0 left-0 z-50 h-24 bg-white shadow-md">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="flex items-center justify-between py-6 md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">Lacar-mdx</span>
                    <img class="w-auto h-8 sm:h-10" src="{{ asset('images/lacar-logo.png') }}" alt="">
                </a>
            </div>

            <nav class="hidden h-full space-x-10 xl:flex">
                <div class="relative h-full select-none" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
                    @click.away="isOpen = false" x-data="{ isOpen: false}">
                    <div class="relative" @click="isOpen = !isOpen">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button type="button"
                            class="inline-flex items-center text-base font-light text-gray-500 uppercase bg-white rounded-md font-ligh group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            <span>{{ $covid->name }}</span>
                            <!--
              Heroicon name: solid/chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
                            <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
            'Solutions' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
                        <div x-show="isOpen" @mouseleave="isOpen = false" x-cloak
                            x-transition:enter="transition ease-out duration-50 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-50 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 w-screen max-w-md px-2 pt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/chart-bar -->
                                        @foreach ($covid->kits as $kit)
                                            <div class="ml-4">
                                                <p class="text-base font-light text-gray-900">
                                                    {{ $kit->name }}
                                                </p>

                                            </div>
                                        @endforeach

                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/cursor-click -->

                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                Acute symptoms SNPs
                                            </p>

                                        </div>
                                    </a>

                                </div>
                                <div class="px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                    <div>
                                        <a href="#"
                                            class="flex items-center p-3 -m-3 text-base font-light text-gray-900 rounded-md hover:bg-gray-100">
                                            <!-- Heroicon name: outline/play -->
                                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                stroke="currentColor" aria-hidden="true">
                                                <path d="M422.863,451.174c-0.147,0.147-0.293,0.293-0.437,0.436c-0.144,0.144-0.285,0.285-0.423,0.423
    C422.307,451.73,422.591,451.446,422.863,451.174z" />
                                                <path d="M426.138,447.898c-0.105,0.105-0.217,0.217-0.334,0.334s-0.24,0.24-0.367,0.367
    C425.712,448.325,425.936,448.101,426.138,447.898z" />
                                                <path
                                                    d="M427.106,446.93c-0.016,0.016-0.043,0.043-0.081,0.081C427.113,446.923,427.141,446.895,427.106,446.93z" />
                                                <path d="M420.873,453.164c-0.11,0.11-0.214,0.214-0.311,0.311c-0.097,0.097-0.187,0.187-0.269,0.269
    C420.489,453.548,420.686,453.35,420.873,453.164z" />
                                                <path d="M471.539,227.517v8.251h-48.783c-3.762-31.193-16.097-59.783-34.586-83.329l34.545-34.545l5.836,5.836
    c18.875,18.875,47.498-9.726,28.61-28.61c-1.057-1.057-2.013-2.013-2.881-2.881c-0.115-0.115-0.22-0.22-0.331-0.331
    c-0.102-0.102-0.238-0.238-0.392-0.392c0.065,0.065,0.132,0.132,0.189,0.189c-0.154-0.154-0.306-0.306-0.454-0.454
    c-0.041-0.041-0.086-0.086-0.126-0.126c-0.118-0.118-0.236-0.236-0.35-0.35c-1.057-1.057-2.754-2.754-5.3-5.3
    c-0.376-0.376-0.568-0.568-0.596-0.596c-5.593-5.593-14.954-14.954-30.04-30.04c-18.9-18.9-47.538,9.685-28.61,28.61l5.836,5.836
    l-34.545,34.545c-23.546-18.49-52.137-30.825-83.329-34.586V40.461h8.251c26.733,0,26.761-40.461,0-40.461h-56.964
    c-26.733,0-26.761,40.461,0,40.461h8.251v48.783c-31.193,3.762-59.783,16.097-83.329,34.586l-34.546-34.545l5.836-5.836
    c18.905-18.901-9.686-47.533-28.61-28.61c-2.238,2.238-4.03,4.03-5.456,5.456c-4.168,4.168-14.111,14.111-34.825,34.825
    c-18.905,18.902,9.763,47.459,28.61,28.61l5.836-5.836l34.545,34.545c-18.49,23.546-30.825,52.137-34.586,83.329H40.461v-8.251
    c0-26.733-40.461-26.761-40.461,0v56.964c0,26.733,40.461,26.761,40.461,0v-8.251h48.783
    c3.762,31.193,16.097,59.783,34.586,83.329l-34.545,34.545l-5.836-5.836c-18.901-18.899-47.539,9.685-28.61,28.61
    c1.057,1.057,2.013,2.013,2.881,2.881c5.376,5.376,7.266,7.266,7.36,7.36c5.593,5.593,14.954,14.954,30.04,30.04
    c18.9,18.9,47.541-9.682,28.61-28.61l-5.836-5.836l34.545-34.545c23.546,18.49,52.136,30.825,83.329,34.586v48.783h-8.251
    c-26.733,0-26.761,40.461,0,40.461h56.964c26.733,0,26.761-40.461,0-40.461h-8.251v-48.783
    c31.193-3.762,59.783-16.097,83.329-34.586l34.545,34.545l-5.836,5.836c-18.905,18.902,9.763,47.457,28.61,28.61
    c1.073-1.073,2.043-2.043,2.921-2.921c-0.137,0.137,0.071-0.071,0.762-0.762c0.268-0.268,0.611-0.611,1.038-1.038
    c0.249-0.249,0.519-0.519,0.827-0.827c0.867-0.867,1.986-1.986,3.378-3.378c0.409-0.409,0.843-0.843,1.302-1.302
    c5.591-5.591,14.955-14.955,30.052-30.052c18.905-18.901-9.686-47.533-28.61-28.61l-5.836,5.836l-34.545-34.545
    c18.49-23.546,30.825-52.136,34.586-83.329h48.783v8.251c0,26.733,40.461,26.761,40.461,0v-56.964
    C512,200.784,471.539,200.757,471.539,227.517z M219.572,268.96c-24.636,0-44.607-19.972-44.607-44.607
    s19.972-44.607,44.607-44.607s44.607,19.972,44.607,44.607S244.208,268.96,219.572,268.96z M292.428,319.935
    c-15.192,0-27.507-12.315-27.507-27.507s12.315-27.507,27.507-27.507s27.507,12.315,27.507,27.507
    C319.935,307.62,307.62,319.935,292.428,319.935z" />
                                                <path d="M421.221,452.816c0.273-0.273,0.532-0.532,0.783-0.783c-0.138,0.138-0.273,0.273-0.404,0.404
    C421.469,452.568,421.342,452.695,421.221,452.816z" />
                                            </svg>
                                            <span class="ml-3">COVID-19</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="flex items-center p-3 -m-3 text-base font-light text-gray-900 rounded-md hover:bg-gray-100">
                                            <!-- Heroicon name: outline/play -->
                                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                stroke="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            </svg>
                                            <span class="ml-3">Testing for entreprises</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative h-full" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
                    @click.away="isOpen = false" x-data="{isOpen : false}">
                    <div @click="isOpen = !isOpen" class="relative h-full">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button type="button"
                            class="inline-flex items-center text-base font-light text-gray-500 uppercase bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            <span>Kits</span>
                            <!--
              Heroicon name: solid/chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
                            <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!--
            'More' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
                        <div x-show="isOpen" @mouseleave="isOpen = false" x-cloak
                            x-transition:enter="transition ease-out duration-50 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-50 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 w-screen max-w-md px-2 pt-3 transform -translate-x-1/2 left-1/2 sm:px-0">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                    @foreach ($categories as $category)
                                        <div x-data="{isSubOpen : false}" x-on:mouseenter=" isSubOpen=!isSubOpen"
                                            x-on:mouseleave="isSubOpen=false">
                                            <a href="/{{ $category->slug }}"
                                                class="text-red-300">{{ $category->name }}</a>
                                            <div x-show="isSubOpen">
                                                @foreach ($category->kits ?? '' as $kit)
                                                    <a href="/p/{{ $kit->slug }}">{{ $kit->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>

                                    @endforeach

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/support -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                Help Center
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Get all of your questions answered in our forums or contact support.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/bookmark-alt -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                Guides
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Learn how to maximize our platform to get the most out of it.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/calendar -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                Events
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                See what meet-ups and other events we might be planning near you.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                Security
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Understand how we take your privacy seriously.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                    <div>
                                        <h3 class="text-sm font-light tracking-wide text-gray-500 uppercase">
                                            Recent Posts
                                        </h3>
                                        <ul class="mt-4 space-y-4">
                                            <li class="text-base truncate">
                                                <a href="#" class="font-light text-gray-900 hover:text-gray-700">
                                                    Boost your conversion rate
                                                </a>
                                            </li>

                                            <li class="text-base truncate">
                                                <a href="#" class="font-light text-gray-900 hover:text-gray-700">
                                                    How to use search engine optimization to drive traffic to your site
                                                </a>
                                            </li>

                                            <li class="text-base truncate">
                                                <a href="#" class="font-light text-gray-900 hover:text-gray-700">
                                                    Improve your customer experience
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-5 text-sm">
                                        <a href="#" class="font-light text-yellow-500 hover:text-yellow-500"> View all
                                            posts <span aria-hidden="true">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/solutions" class="text-base font-light text-gray-500 uppercase hover:text-yellow-300">
                    Solutions
                </a>
                <a href="/software" class="text-base font-light text-gray-500 uppercase hover:text-yellow-300">
                    Software
                </a>
                <a href="/restricted" class="text-base font-light text-gray-500 uppercase hover:text-yellow-300">
                    Restricted Area
                </a>
                <a href="/services" class="text-base font-light text-gray-500 uppercase hover:text-yellow-300">
                    Services
                </a>
                <a href="/jobs" class="text-base font-light text-gray-500 uppercase hover:text-yellow-300">
                    Jobs
                </a>
            </nav>
            <div class="flex justify-end space-x-4">
                <div class="items-center hidden md:flex">
                    <div class="flex-shrink-0">
                        <a href="/contact">
                            <button type="button"
                                class="relative inline-flex items-center px-4 py-2 text-base font-light text-white bg-yellow-500 border border-transparent rounded-md shadow-sm hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
                                <!-- Heroicon name: solid/plus -->
                                <svg class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="uppercase">Contact us</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="flex items-center mr-2 -my-2 xl:hidden" x-data="{ id : 'mobile-menu'}">
                    <button type="button" @click="$dispatch('open-dropdown',{id})"
                        class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <div class="relative bg-yellow-500">
        <div class="py-0.5 mt-3 mx-auto sm:mt-1">
        </div>
    </div>
    <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
    <div x-data="{ isOpen : false }" x-show="isOpen"
        @open-dropdown.window="if ($event.detail.id == 'mobile-menu') isOpen = true;"
        class="absolute inset-x-0 top-0 z-50 p-2 transition origin-top-right transform xl:hidden">
        <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
            <div class="px-4 pt-4 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="w-auto h-8 sm:h-10" src="{{ asset('images/lacar-logo.png') }}" alt="Lacar-Mdx">
                    </div>
                    <div class="-mr-2">
                        <button type="button" @click="isOpen = false"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="md:flex">
                    <div class="md:w-1/3">
                        <nav class="mt-10">
                            <a href="#" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 text-lg font-semibold text-gray-900">
                                    Analytics
                                </span>
                            </a>

                            <a href="#" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 text-lg font-semibold text-gray-900">
                                    Engagement
                                </span>
                            </a>

                            <a href="#" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 text-lg font-semibold text-gray-900">
                                    Security
                                </span>
                            </a>

                            <a href="#" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/view-grid -->
                                <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 text-lg font-semibold text-gray-900">
                                    Integrations
                                </span>
                            </a>

                            <a href="#" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/refresh -->
                                <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span class="ml-3 text-lg font-semibold text-gray-900">
                                    Automations
                                </span>
                            </a>
                        </nav>
                    </div>

                    <div class="px-5 py-6 mt-6 space-y-6 md:w-2/3 bg-gray-50 ">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Pricing
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Docs
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Enterprise
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Blog
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Help Center
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Guides
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Security
                            </a>

                            <a href="#" class="text-base font-light text-gray-900 hover:text-gray-700">
                                Events
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <a href="/contact"
                    class="flex items-center justify-center w-1/2 px-4 py-2 mx-auto text-base font-light text-white uppercase bg-yellow-500 border border-transparent rounded-md shadow-sm hover:bg-yellow-700">
                    Contact us
                </a>
            </div>
        </div>
    </div>
</div>
