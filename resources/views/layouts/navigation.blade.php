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
                <div class="h-full select-none " @mouseenter="isOpen = true" @mouseleave="isOpen = false"
                    @click.away="isOpen = false" x-data="{ isOpen: false}">
                    <div class="" @click="isOpen = !isOpen">
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
                            class="absolute left-0 z-10 w-screen px-2 transform sm:px-0">
                            <div class="shadow-lg">
                                <div
                                    class="flex flex-row items-center h-12 gap-4 px-2 mt-10 bg-gray-800 bg-opacity-90 sm:gap-8 sm:p-8">
                                    @foreach ($covid->kits as $kit)
                                        <div x-data="{isSubOpen : false}" x-on:mouseenter=" isSubOpen=!isSubOpen"
                                            x-on:mouseleave="isSubOpen=false" class="">
                                            <div class="relative p-4 rounded-t-md hover:bg-yellow-500">
                                                <a href="/{{ $kit->slug }}"
                                                    class="text-white">{{ $kit->name }}</a>

                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
                    @click.away="isOpen = false" x-data="{isOpen : false}">
                    <div @click="isOpen = !isOpen" class="h-full">
                        <a href="/kits">
                            <!-- Item active: "text-gray-900" , Item inactive: "text-gray-500" -->
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
                        </a>
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
                            class="absolute left-0 z-10 w-screen px-2 transform sm:px-0">
                            <div class="shadow-lg">
                                <div
                                    class="flex flex-row items-center h-12 gap-4 px-2 mt-10 bg-gray-800 bg-opacity-90 sm:gap-8 sm:p-8">
                                    @foreach ($categories as $category)
                                        <div x-data="{isSubOpen : false}" x-on:mouseenter=" isSubOpen=!isSubOpen"
                                            x-on:mouseleave="isSubOpen=false" class="">
                                            <div class="relative p-4 rounded-t-md hover:bg-yellow-500">
                                                <a href="/{{ $category->slug }}"
                                                    class="text-white">{{ $category->name }}</a>
                                                @if ($category->kits->count() > 0)
                                                    <div x-show="isSubOpen"
                                                        class="absolute top-0 left-0 max-w-sm mt-12 space-y-2 bg-gray-50 rounded-b-md rounded-tr-md">
                                                        @foreach ($category->kits as $kit)
                                                            <div
                                                                class="w-screen max-w-sm p-4 text-gray-500 rounded-md hover:bg-gray-100 hover:text-yellow-500">
                                                                <a href="/p/{{ $kit->slug }}">{{ $kit->name }}</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endisset
                                        </div>

                                    </div>
                                @endforeach
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
<div class="w-screen h-12 bg-gray-800" x-show="isOpen" @mouseleave="isOpen = false" x-cloak
    x-transition:enter="transition ease-out duration-50 transform" x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-50 transform"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"></div>
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
                        <a href="/covid" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                COVID
                            </span>
                        </a>

                        <a href="/kits" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Kits
                            </span>
                        </a>

                        <a href="/solutions" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Solutions
                            </span>
                        </a>

                        <a href="/software" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/view-grid -->
                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Software
                            </span>
                        </a>

                        <a href="/restricted" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Restricted Area
                            </span>
                        </a>

                        <a href="/services" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Services
                            </span>
                        </a>

                        <a href="/jobs" class="flex p-3 -m-3 rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg class="flex-shrink-0 w-6 h-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="ml-3 text-lg font-semibold text-gray-900">
                                Jobs
                            </span>
                        </a>
                    </nav>
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
