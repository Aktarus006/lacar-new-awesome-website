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
                            <span>Covid19</span>
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
                        <div x-show="isOpen" @mouseleave="isOpen = false"
                            x-transition:enter="transition ease-out duration-50 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-50 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 w-screen max-w-md px-2 pt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/chart-bar -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /> -->
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M21.03,22.11c-0.07-0.18-0.18-0.34-0.31-0.48c-0.24-0.26-0.48-0.52-0.71-0.79c-0.01-0.02-0.03-0.03-0.04-0.06
		c-0.68-1.45-1.36-2.91-2.04-4.37c-0.02-0.04-0.04-0.09-0.06-0.13c-0.09-0.18-0.17-0.37-0.26-0.56c0.33-0.11,0.59-0.31,0.76-0.63
		c0.1-0.18,0.16-0.38,0.2-0.59c0.01-0.08-0.01-0.11-0.09-0.12c-0.17-0.01-0.34-0.02-0.5-0.04c-0.32,0.01-0.64,0.05-0.95,0.12
		c-0.02,0-0.04,0.01-0.06,0.01c-0.03,0.01-0.06,0.02-0.09,0.03c0.03,0.06,0.05,0.12,0.08,0.17c0.17,0.36,0.33,0.72,0.5,1.07
		c0.78,1.68,1.57,3.36,2.35,5.04c-0.1,0.05-0.2,0.09-0.3,0.14c-0.8-1.71-1.6-3.42-2.39-5.13c-0.15-0.32-0.3-0.64-0.45-0.96
		c-0.04-0.08-0.07-0.15-0.11-0.23c-0.05,0.02-0.1,0.04-0.14,0.06c-0.39,0.18-0.74,0.41-1.06,0.71c-0.01,0.01-0.02,0.02-0.03,0.02
		c-0.04,0.05-0.03,0.09,0.03,0.12c0.01,0,0.03,0.01,0.04,0.01c0.42,0.13,0.85,0.23,1.29,0.26c0.09,0.01,0.17,0.01,0.26,0.01
		c0.09,0.2,0.19,0.4,0.28,0.6c0.02,0.04,0.04,0.09,0.06,0.13c0.69,1.49,1.39,2.98,2.08,4.46c0.01,0.03,0.02,0.07,0.03,0.1
		c0.04,0.31,0.08,0.63,0.12,0.94c0.03,0.24,0.09,0.47,0.19,0.69c0.1,0.22,0.27,0.36,0.49,0.44c0.36,0.12,0.7-0.03,0.84-0.37
		C21.14,22.6,21.13,22.35,21.03,22.11z M20.9,22.76c-0.1,0.27-0.34,0.39-0.62,0.31c-0.22-0.06-0.37-0.21-0.46-0.41
		c-0.09-0.2-0.13-0.41-0.16-0.63c-0.04-0.29-0.07-0.59-0.11-0.88c0-0.02,0-0.04,0.02-0.05c0.1-0.04,0.2-0.09,0.29-0.14
		c0.02-0.01,0.03-0.01,0.05,0.01c0.25,0.28,0.5,0.55,0.74,0.83c0.09,0.09,0.15,0.2,0.2,0.32C20.97,22.33,20.98,22.54,20.9,22.76z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="M12.13,17.7c-0.03,0-0.07,0-0.1,0c-0.55-0.01-1.08-0.16-1.6-0.44c-0.33-0.18-0.65-0.4-0.97-0.69l-0.04-0.04
		l-0.02,0.01c-0.14,0.04-0.27,0.08-0.41,0.11c-0.3,0.06-0.6,0.1-0.95,0.1c-0.5,0.01-0.95-0.03-1.36-0.1
		c-0.31-0.06-0.58-0.14-0.83-0.26C5.22,16.1,4.79,15.64,4.55,15c-0.18-0.48-0.25-0.99-0.21-1.52c0.05-0.67,0.31-1.28,0.77-1.8
		c0.12-0.14,0.26-0.27,0.43-0.42l0.36-0.3c0.33-0.28,0.66-0.56,0.99-0.84c0.31-0.26,0.62-0.56,0.94-0.89
		c0.25-0.26,0.42-0.56,0.51-0.93c0.09-0.34,0.12-0.71,0.11-1.16C8.44,6.81,8.4,6.49,8.37,6.18L8.36,6.12
		C8.31,5.63,8.3,5.18,8.35,4.75c0.05-0.54,0.18-1,0.39-1.41c0.13-0.26,0.27-0.47,0.44-0.65c0.43-0.48,0.9-0.85,1.44-1.12
		c0.38-0.2,0.78-0.32,1.18-0.37c0.46-0.05,0.93-0.01,1.38,0.13c0.39,0.12,0.76,0.31,1.14,0.56c0.29,0.2,0.56,0.42,0.81,0.66
		c0.46,0.45,0.77,1.01,0.91,1.67c0.08,0.4,0.11,0.84,0.08,1.33c-0.04,0.61-0.08,1.2-0.06,1.79c0.01,0.36,0.04,0.69,0.11,1
		c0.04,0.2,0.12,0.39,0.24,0.6c0.13,0.21,0.29,0.42,0.51,0.64c0.28,0.28,0.6,0.56,1.01,0.86c0.09,0.07,0.19,0.14,0.28,0.2
		c0.11,0.08,0.22,0.16,0.33,0.25c0.36,0.28,0.66,0.57,0.91,0.9c0.35,0.46,0.57,0.97,0.65,1.51l0,0c0.07,0.48,0.05,0.9-0.06,1.3
		c-0.14,0.51-0.44,0.95-0.88,1.3c-0.35,0.27-0.74,0.48-1.18,0.61l-0.52,0.13l-0.06-0.13c-0.02-0.04-0.02-0.04-0.04-0.09l-0.06-0.12
		l0.56-0.13c0.42-0.13,0.79-0.33,1.12-0.59c0.42-0.34,0.67-0.76,0.76-1.26c0.08-0.47,0.05-0.94-0.1-1.41
		c-0.13-0.4-0.35-0.78-0.67-1.14c-0.24-0.27-0.53-0.52-0.89-0.78c-0.41-0.29-0.74-0.55-1.03-0.8c-0.33-0.29-0.58-0.55-0.78-0.83
		c-0.27-0.36-0.43-0.74-0.48-1.18c-0.05-0.4-0.08-0.82-0.08-1.23c0-0.47,0.03-0.94,0.06-1.4l0.01-0.11c0.03-0.43,0-0.83-0.09-1.21
		c-0.13-0.58-0.41-1.07-0.82-1.46c-0.19-0.18-0.38-0.34-0.57-0.48c-0.41-0.3-0.8-0.51-1.21-0.63c-0.43-0.13-0.87-0.17-1.29-0.11
		c-0.36,0.05-0.72,0.17-1.07,0.36c-0.38,0.21-0.75,0.49-1.12,0.85C9.36,3.01,9.17,3.27,9.03,3.57c-0.2,0.42-0.31,0.9-0.34,1.46
		c-0.02,0.39,0,0.8,0.06,1.26C8.78,6.6,8.81,6.92,8.81,7.23c0,0.07-0.01,0.14-0.01,0.21c0,0.07,0,0.13-0.01,0.2
		c-0.02,0.28-0.06,0.54-0.13,0.8c-0.11,0.4-0.3,0.74-0.57,1.02C7.77,9.8,7.45,10.1,7.14,10.37c-0.27,0.23-0.55,0.47-0.83,0.7
		l-0.41,0.34c-0.16,0.14-0.33,0.29-0.48,0.45c-0.45,0.5-0.69,1.07-0.73,1.71c-0.02,0.44,0.04,0.87,0.19,1.29
		c0.2,0.54,0.57,0.95,1.1,1.19c0.25,0.11,0.53,0.2,0.84,0.25c0.38,0.06,0.79,0.09,1.2,0.08c0.51-0.01,0.95-0.08,1.34-0.23
		c0.08-0.04,0.17-0.02,0.23,0.05c0.01,0.01,0.02,0.02,0.03,0.03c0.38,0.35,0.75,0.6,1.13,0.79c0.38,0.18,0.76,0.29,1.15,0.31
		c0.44,0.03,0.88-0.01,1.35-0.13c0.64-0.16,1.15-0.47,1.54-0.93c0.06-0.08,0.15-0.1,0.25-0.07c0.41,0.09,0.79,0.15,1.15,0.18
		c0.36,0.02,0.69,0.01,1.02-0.03l0.08-0.01l0.16,0.34l-0.15,0.02c-0.39,0.06-0.79,0.07-1.21,0.04c-0.34-0.03-0.69-0.08-1.07-0.16
		c-0.44,0.49-0.98,0.81-1.67,0.99C12.95,17.65,12.54,17.7,12.13,17.7z M14.88,16.33l0.03,0.02c0,0,0,0,0,0L14.88,16.33z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.73,12.89c0.15,0.48,0.19,0.97,0.1,1.47c-0.1,0.54-0.37,0.98-0.8,1.33c-0.35,0.28-0.73,0.48-1.15,0.61
		c-0.09-0.18-0.17-0.37-0.26-0.56c0.33-0.11,0.59-0.31,0.76-0.63c0.1-0.18,0.16-0.38,0.2-0.59c0.01-0.08-0.01-0.11-0.09-0.12
		c-0.17-0.01-0.34-0.02-0.5-0.04c-0.32,0.01-0.64,0.05-0.95,0.12c-0.02,0-0.04,0.01-0.06,0.01c-0.03,0.01-0.06,0.02-0.09,0.03
		c0.03,0.06,0.05,0.12,0.08,0.17c0.17,0.36,0.33,0.72,0.5,1.07c0.78,1.68,1.57,3.36,2.35,5.04c-0.1,0.05-0.2,0.09-0.3,0.14
		c-0.8-1.71-1.6-3.42-2.39-5.13c-0.15-0.32-0.3-0.64-0.45-0.96c-0.04-0.08-0.07-0.15-0.11-0.23c-0.05,0.02-0.1,0.04-0.14,0.06
		c-0.39,0.18-0.74,0.41-1.06,0.71c-0.01,0.01-0.02,0.02-0.03,0.02c-0.04,0.05-0.03,0.09,0.03,0.12c0.01,0,0.03,0.01,0.04,0.01
		c0.42,0.13,0.85,0.23,1.29,0.26c0.09,0.01,0.17,0.01,0.26,0.01c0.09,0.2,0.19,0.4,0.28,0.6c-0.35,0.05-0.69,0.06-1.04,0.03
		c-0.4-0.03-0.78-0.09-1.17-0.18c-0.05-0.01-0.09-0.01-0.13,0.04c-0.42,0.5-0.97,0.81-1.6,0.97c-0.46,0.12-0.92,0.17-1.38,0.14
		c-0.42-0.03-0.82-0.14-1.19-0.32c-0.43-0.2-0.81-0.48-1.15-0.8c-0.01-0.01-0.03-0.02-0.04-0.04c-0.03-0.03-0.07-0.04-0.11-0.02
		c-0.44,0.16-0.9,0.23-1.37,0.23c-0.41,0.01-0.82-0.02-1.22-0.08c-0.3-0.05-0.59-0.13-0.87-0.26c-0.56-0.26-0.95-0.68-1.16-1.26
		c-0.16-0.43-0.22-0.87-0.2-1.33c0.04-0.69,0.3-1.28,0.76-1.78c0.15-0.17,0.32-0.32,0.49-0.46c0.41-0.35,0.82-0.69,1.23-1.04
		C7.4,10,7.71,9.69,8.02,9.38C8.29,9.1,8.46,8.77,8.56,8.4c0.07-0.25,0.11-0.51,0.12-0.77C8.69,7.5,8.69,7.37,8.7,7.23
		C8.69,6.92,8.67,6.61,8.63,6.3C8.58,5.88,8.55,5.45,8.58,5.02C8.6,4.5,8.7,4,8.93,3.52c0.15-0.31,0.34-0.58,0.58-0.82
		c0.34-0.34,0.72-0.64,1.14-0.87c0.35-0.19,0.72-0.32,1.11-0.37c0.46-0.07,0.9-0.02,1.34,0.11c0.45,0.14,0.86,0.37,1.24,0.65
		c0.2,0.15,0.4,0.31,0.58,0.49c0.44,0.42,0.72,0.92,0.85,1.51c0.09,0.41,0.12,0.82,0.09,1.24c-0.03,0.5-0.07,1-0.07,1.5
		c0,0.41,0.02,0.81,0.08,1.22c0.06,0.42,0.21,0.79,0.46,1.12c0.22,0.3,0.49,0.57,0.77,0.82c0.32,0.29,0.67,0.55,1.02,0.8
		c0.33,0.23,0.64,0.49,0.91,0.79C19.34,12.06,19.59,12.44,19.73,12.89z M9.1,15.55c0.06-0.03,0.07-0.07,0.03-0.12
		c-0.01-0.01-0.02-0.02-0.03-0.03c-0.77-0.69-1.66-1.05-2.7-1.04c-0.14,0.01-0.29,0.02-0.43,0.03c-0.08,0.01-0.1,0.04-0.08,0.11
		c0.02,0.09,0.03,0.17,0.06,0.26c0.17,0.55,0.53,0.89,1.09,1.02c0.33,0.07,0.66,0.06,0.99,0.02c0.35-0.05,0.7-0.13,1.04-0.24
		C9.07,15.56,9.09,15.56,9.1,15.55z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20.86,22.12c0.1,0.21,0.12,0.43,0.04,0.65c-0.1,0.27-0.34,0.39-0.62,0.31c-0.22-0.06-0.37-0.21-0.46-0.41
		c-0.09-0.2-0.13-0.41-0.16-0.63c-0.04-0.29-0.07-0.59-0.11-0.88c0-0.02,0-0.04,0.02-0.05c0.1-0.04,0.2-0.09,0.29-0.14
		c0.02-0.01,0.03-0.01,0.05,0.01c0.25,0.28,0.5,0.55,0.74,0.83C20.75,21.89,20.81,22,20.86,22.12z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.12,15.44c0.04,0.05,0.03,0.09-0.03,0.12c-0.01,0.01-0.03,0.01-0.04,0.01c-0.34,0.11-0.68,0.19-1.04,0.24
		c-0.33,0.04-0.66,0.06-0.99-0.02c-0.57-0.12-0.92-0.47-1.09-1.02c-0.03-0.08-0.04-0.17-0.06-0.26c-0.01-0.07,0.01-0.1,0.08-0.11
		c0.14-0.01,0.29-0.02,0.43-0.03c1.04-0.01,1.93,0.35,2.7,1.04C9.11,15.42,9.12,15.43,9.12,15.44z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                From nasopharyngeal Swab
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Get a better understanding of where your traffic is coming from.
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                        <!-- Heroicon name: outline/cursor-click -->
                                        <svg class="flex-shrink-0 w-6 h-6 text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">

                                            <path class="st1" d="M13.25,21.68c0,0.35,0,0.71,0,1.06c-1.07,0-2.14,0-3.21,0c0-0.35,0-0.71,0-1.06
		C11.1,21.68,12.17,21.68,13.25,21.68z" />
                                            <path class="st1" d="M14.92,13.89c0.05,0.01,0.11,0.03,0.16,0.05c0.04,0.02,0.05,0.04,0.02,0.08c-0.05,0.06-0.11,0.1-0.19,0.11
		c-0.35,0.04-0.69,0.08-1.03,0.11c-0.42,0.04-0.84,0.06-1.26,0.08c-0.36,0.02-0.73,0.02-1.12,0.03c-0.4-0.01-0.83-0.02-1.26-0.04
		c-0.38-0.02-0.75-0.04-1.13-0.07c-0.3-0.02-0.6-0.06-0.9-0.09c-0.04,0-0.13-0.07-0.13-0.11c0-0.01,0.01-0.04,0.02-0.05
		c0.03-0.02,0.07-0.04,0.11-0.06c0.12-0.05,0.24-0.06,0.37-0.08c0.22-0.03,0.44-0.05,0.66-0.07c0.2-0.02,0.41-0.04,0.62-0.05
		c0.29-0.02,0.59-0.04,0.88-0.05c0.44-0.01,0.89-0.01,1.33-0.01c0.24,0,0.49,0.01,0.73,0.02c0.26,0.01,0.53,0.03,0.79,0.05
		c0.22,0.02,0.45,0.04,0.67,0.06C14.47,13.83,14.69,13.86,14.92,13.89z" />
                                            <path class="st1" d="M13.29,22.98h-3.3c-0.14,0-0.21-0.07-0.21-0.2V19.8H9.5c-0.02,0-0.09,0-0.15-0.05C9.3,19.7,9.3,19.62,9.3,19.6
		l0.01-2.07c-0.5-0.64-0.88-1.4-1.11-2.23c-0.09-0.32-0.16-0.65-0.21-0.98c-0.03-0.02-0.08-0.06-0.11-0.1
		c-0.1-0.13-0.08-0.29,0.04-0.39c0.08-0.06,0.16-0.1,0.23-0.12c0.15-0.05,0.29-0.07,0.44-0.08l0.03,0c0.22-0.03,0.44-0.05,0.65-0.07
		c0.23-0.02,0.46-0.04,0.69-0.06c0.25-0.02,0.51-0.03,0.76-0.04c0.47-0.02,0.9-0.02,1.3-0.01c0.33,0.01,0.66,0.02,1,0.04
		c0.32,0.02,0.67,0.04,1.06,0.08c0.28,0.03,0.53,0.06,0.77,0.09c0.1,0.01,0.19,0.04,0.28,0.07l0,0c0.11,0.05,0.18,0.13,0.2,0.22
		c0.02,0.1-0.02,0.2-0.1,0.29c-0.02,0.02-0.04,0.03-0.06,0.05c-0.01,0-0.01,0.01-0.02,0.01c-0.03,0.61-0.19,1.19-0.48,1.8
		c-0.19,0.39-0.44,0.8-0.76,1.23l-0.03,0.04c-0.04,0.06-0.08,0.11-0.12,0.17l0,2.07c0,0.01,0,0.04,0,0.06
		c0,0.08-0.08,0.15-0.17,0.15c-0.03,0-0.07,0-0.11,0c0,0.08,0,0.17,0,0.25l0,0.16c0,0.16,0,0.3,0,0.41h0c0,0.01,0,0.13,0,0.26
		c0,0.03,0,0.06,0,0.09c0,0.14,0,0.33,0,0.57c0,0.41,0,0.82,0,1.24C13.49,22.92,13.42,22.98,13.29,22.98z M10.14,22.63h3v-0.84h-3
		V22.63z M10.14,21.43c1,0,2,0,3,0c0-0.28,0-0.49,0-0.64v0c0,0,0-0.21,0-0.99c-1,0-2,0-3,0V21.43z M9.85,19.8
		c0.01,0,0.02,0.01,0.03,0.01l-0.02-0.08l0.04-0.01l-0.04,0l0-0.02v0.02l-0.06,0c0,0.01,0,0.02,0.01,0.02l0.06-0.02V19.8z
		 M13.64,19.59L13.64,19.59h0.03H13.64z M9.66,19.45h3.76v-1.77c-0.6,0.1-1.22,0.14-1.84,0.14c-0.62,0-1.26-0.05-1.92-0.14V19.45z
		 M9.58,17.3l0.19,0.03c0.22,0.03,0.45,0.06,0.67,0.08c0.28,0.02,0.56,0.04,0.82,0.05c0.39,0.02,0.81,0,1.29-0.03
		c0.31-0.02,0.62-0.06,0.94-0.12c0.09-0.12,0.17-0.23,0.25-0.34c0.31-0.45,0.55-0.86,0.73-1.26l0,0c0.19-0.44,0.3-0.87,0.34-1.32
		c-2.15,0.26-4.31,0.27-6.45,0.03c0,0.01,0,0.02,0,0.02c0.08,0.44,0.18,0.85,0.32,1.24C8.91,16.28,9.21,16.82,9.58,17.3
		C9.58,17.3,9.58,17.3,9.58,17.3z M13.49,17.32c0,0-0.01,0.01-0.01,0.01C13.49,17.32,13.49,17.32,13.49,17.32z M9.56,17.3L9.56,17.3
		C9.56,17.3,9.56,17.3,9.56,17.3z M15.18,14.25C15.18,14.25,15.18,14.25,15.18,14.25C15.18,14.25,15.18,14.25,15.18,14.25z
		 M8.22,14.05C8.22,14.05,8.22,14.05,8.22,14.05c0.1,0.01,0.2,0.02,0.3,0.03c0.2,0.02,0.4,0.04,0.6,0.06
		c0.42,0.03,0.79,0.06,1.13,0.07c0.29,0.01,0.58,0.02,0.86,0.03c0.13,0,0.26,0.01,0.39,0.01l0.36-0.01
		c0.26-0.01,0.51-0.01,0.76-0.02c0.43-0.02,0.86-0.05,1.25-0.08c0.22-0.02,0.43-0.04,0.65-0.07c0.13-0.01,0.25-0.03,0.38-0.04
		c0.02,0,0.04-0.01,0.06-0.02C14.94,14,14.92,14,14.91,14c-0.23-0.03-0.45-0.06-0.68-0.09c-0.22-0.02-0.45-0.04-0.67-0.06
		c-0.26-0.02-0.53-0.04-0.79-0.05c-0.24-0.01-0.49-0.02-0.73-0.02c-0.4,0-0.86,0-1.33,0.01c-0.3,0.01-0.61,0.03-0.88,0.05
		c-0.21,0.01-0.41,0.03-0.61,0.05c-0.22,0.02-0.44,0.05-0.65,0.07C8.45,13.98,8.34,14,8.23,14.04C8.23,14.04,8.22,14.04,8.22,14.05z
		 M15.01,13.96l0.08,0.07L15.01,13.96C15.01,13.95,15.01,13.95,15.01,13.96z" />

                                            <path class="st1" d="M6.65,6.26c0.66-0.05,1.3-0.17,1.94-0.33c0.8-0.21,1.58-0.5,2.33-0.84c0.18-0.08,0.37-0.13,0.57-0.15
		c0.24-0.01,0.46,0.03,0.67,0.13c0.41,0.18,0.82,0.36,1.24,0.51c0.55,0.2,1.1,0.37,1.67,0.49c0.3,0.07,0.61,0.12,0.91,0.15
		c0.21,0.02,0.42,0.04,0.63,0.05c0.01,0,0.02,0,0.03,0.01c-0.01,0-0.01,0.01-0.02,0.01c-1.19,0.21-2.32,0.6-3.39,1.15
		C13,7.57,12.78,7.69,12.56,7.82c-0.34,0.2-0.7,0.27-1.09,0.24c-0.27-0.03-0.52-0.11-0.76-0.24c-0.6-0.33-1.22-0.62-1.86-0.87
		C8.2,6.7,7.54,6.5,6.87,6.36C6.72,6.33,6.57,6.31,6.43,6.28c0,0,0,0,0-0.01C6.5,6.27,6.58,6.26,6.65,6.26z" />
                                            <path class="st1"
                                                d="M11.65,8.28c-0.03,0-0.07,0-0.1,0c-0.33-0.02-0.64-0.1-0.93-0.26l0,0c-0.61-0.33-1.19-0.61-1.76-0.83
		C8.17,6.91,7.49,6.71,6.82,6.57c-0.31-0.06-0.61-0.11-0.9-0.14L5.6,6.4C5.54,6.4,5.49,6.38,5.46,6.34C5.44,6.3,5.42,6.26,5.43,6.22
		c0-0.02,0.02-0.14,0.19-0.14h0.37c0.3-0.01,0.58-0.03,0.83-0.05C7.9,5.92,8.97,5.65,10.09,5.2c0.24-0.1,0.48-0.2,0.73-0.31
		l0.06-0.03c0.23-0.1,0.46-0.15,0.71-0.15c0.23,0,0.46,0.05,0.66,0.15c0.41,0.18,0.75,0.32,1.06,0.44c0.64,0.24,1.24,0.42,1.82,0.55
		c0.31,0.07,0.62,0.12,0.92,0.15c0.41,0.05,0.8,0.07,1.17,0.06c0.07,0,0.13,0,0.2-0.01c0.05,0,0.09,0,0.14-0.01
		c0.12-0.01,0.19,0.06,0.19,0.15c0.01,0.09-0.06,0.16-0.16,0.17l-0.3,0.03c-0.32,0.04-0.63,0.09-0.92,0.15
		c-1.28,0.27-2.53,0.75-3.71,1.44C12.35,8.19,12.01,8.28,11.65,8.28z M7.15,6.31C7.73,6.44,8.3,6.62,8.88,6.84
		c0.62,0.24,1.23,0.53,1.87,0.88c0.23,0.13,0.47,0.2,0.72,0.23c0.37,0.04,0.71-0.04,1.03-0.22c0.21-0.12,0.44-0.25,0.68-0.37
		c0.89-0.46,1.82-0.8,2.76-1.03c-0.27-0.03-0.56-0.08-0.89-0.15c-0.54-0.12-1.09-0.28-1.68-0.5C13,5.54,12.6,5.38,12.12,5.17
		c-0.2-0.09-0.41-0.13-0.62-0.12c-0.17,0.01-0.35,0.05-0.53,0.14c-0.81,0.37-1.58,0.64-2.35,0.84C8.13,6.16,7.64,6.25,7.15,6.31z" />
                                            <path class="st1" d="M11.58,13.95c-0.12,0-0.23-0.02-0.35-0.05c-0.39-0.13-0.7-0.35-0.9-0.66c-0.18-0.27-0.26-0.58-0.22-0.91
		c0.02-0.19,0.07-0.38,0.15-0.59c-0.59,0.04-1.15-0.09-1.68-0.39c-0.29-0.16-0.55-0.37-0.8-0.62c-0.33-0.33-0.64-0.67-0.87-0.93
		c-0.3-0.34-0.59-0.68-0.89-1.02c-0.3-0.35-0.6-0.69-0.91-1.04C4.79,7.36,4.4,6.92,3.98,6.5L3.94,6.45C3.91,6.43,3.89,6.4,3.86,6.37
		C3.83,6.34,3.8,6.29,3.77,6.24C3.7,6.13,3.7,6,3.78,5.89C3.81,5.84,3.85,5.8,3.88,5.77l1.04-0.94c0.85-0.77,1.69-1.53,2.54-2.29
		C7.73,2.29,8,2.06,8.27,1.83l0.22-0.19c0.2-0.17,0.41-0.28,0.65-0.33c0.22-0.04,0.45-0.04,0.69,0.02c0.22,0.05,0.43,0.14,0.66,0.26
		l0,0c0.21,0.12,0.41,0.2,0.6,0.26C11.62,2,12.12,1.93,12.6,1.64c0.11-0.07,0.27-0.16,0.44-0.23c0.25-0.1,0.48-0.15,0.72-0.14
		c0.27,0,0.5,0.07,0.73,0.2c0.08,0.05,0.17,0.11,0.25,0.17c0.43,0.34,0.86,0.72,1.38,1.19c0.74,0.67,1.47,1.35,2.2,2.02l0.62,0.57
		c0.12,0.11,0.24,0.22,0.36,0.33c0.03,0.03,0.06,0.06,0.09,0.09c0.1,0.13,0.11,0.28,0.04,0.42c-0.03,0.06-0.07,0.11-0.12,0.16
		c-0.2,0.22-0.4,0.44-0.6,0.67l-0.77,0.86c-0.76,0.84-1.54,1.71-2.3,2.58c-0.27,0.31-0.56,0.56-0.88,0.75
		c-0.36,0.22-0.75,0.35-1.15,0.41c-0.23,0.03-0.46,0.03-0.69,0.01c0.08,0.19,0.13,0.36,0.16,0.52c0.08,0.44-0.03,0.82-0.32,1.14
		c-0.21,0.23-0.47,0.41-0.75,0.51C11.85,13.92,11.71,13.95,11.58,13.95z M11.58,9.86l-0.8,1.54c-0.06,0.12-0.13,0.24-0.19,0.36
		c-0.1,0.21-0.16,0.42-0.18,0.63c-0.02,0.27,0.04,0.5,0.2,0.71c0.18,0.24,0.41,0.4,0.73,0.49c0.17,0.05,0.35,0.05,0.53-0.02
		c0.23-0.09,0.43-0.23,0.61-0.41c0.23-0.25,0.31-0.53,0.25-0.87c-0.03-0.17-0.08-0.33-0.16-0.49c-0.04-0.09-0.09-0.17-0.13-0.26
		c-0.03-0.06-0.06-0.12-0.1-0.18C12.1,10.85,11.84,10.35,11.58,9.86z M4.04,6.08c0,0,0,0.01,0.01,0.02C4.07,6.12,4.08,6.13,4.1,6.15
		C4.54,6.6,4.96,7.06,5.26,7.41C5.55,7.74,5.84,8.07,6.12,8.4C6.4,8.72,6.68,9.03,6.95,9.35c0.32,0.37,0.66,0.75,1.02,1.12
		c0.26,0.26,0.53,0.47,0.82,0.62h0c0.5,0.27,1.05,0.37,1.62,0.3c0.01-0.02,0.02-0.05,0.04-0.07c0.02-0.04,0.04-0.07,0.06-0.11
		c0.3-0.58,0.6-1.16,0.9-1.75c0.01-0.03,0.02-0.05,0.03-0.06c0.03-0.05,0.08-0.07,0.13-0.07c0,0,0,0,0,0c0.05,0,0.1,0.02,0.13,0.07
		c0.01,0.02,0.02,0.03,0.03,0.05c0.16,0.32,0.32,0.63,0.47,0.93c0.1,0.19,0.2,0.38,0.3,0.57c0.07,0.13,0.14,0.26,0.21,0.4
		c0.16,0.01,0.31,0.03,0.45,0.04l0.13-0.01c0.1-0.01,0.19-0.01,0.29-0.03c0.36-0.05,0.7-0.18,1.01-0.38
		c0.27-0.17,0.52-0.39,0.77-0.67L17.8,7.6c0.21-0.23,0.42-0.47,0.63-0.7c0.21-0.23,0.42-0.46,0.63-0.7
		c0.03-0.03,0.05-0.06,0.06-0.08c0.02-0.03,0.02-0.05-0.01-0.09C19.1,6.02,19.08,6.01,19.07,6c-0.38-0.35-0.75-0.69-1.12-1.03
		L17.55,4.6c-0.65-0.6-1.32-1.23-2-1.82c-0.27-0.24-0.54-0.47-0.82-0.7l-0.2-0.17c-0.12-0.11-0.26-0.19-0.4-0.24
		c-0.26-0.1-0.53-0.1-0.83-0.02c-0.17,0.05-0.34,0.13-0.54,0.25C12.22,2.25,11.62,2.33,11,2.16c-0.21-0.06-0.42-0.15-0.66-0.28
		c-0.21-0.12-0.4-0.19-0.59-0.24c-0.22-0.05-0.41-0.06-0.6-0.01C8.99,1.68,8.85,1.76,8.71,1.88L8.53,2.04
		C8.31,2.22,8.1,2.4,7.9,2.58C7.12,3.27,6.36,3.96,5.59,4.66C5.21,5,4.83,5.35,4.45,5.69L4.13,5.98C4.1,6,4.08,6.03,4.06,6.05
		C4.05,6.07,4.04,6.07,4.04,6.08z" />
                                        </svg>
                                        <div class="ml-4">
                                            <p class="text-base font-light text-gray-900">
                                                From Saliva
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Speak directly to your customers in a more meaningful way.
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
                                                Acute symptoms SNPs
                                            </p>
                                            <p class="mt-1 text-sm text-gray-500">
                                                Your customers&#039; data will be safe and secure.
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
                        <div x-show="isOpen" @mouseleave="isOpen = false"
                            x-transition:enter="transition ease-out duration-50 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-50 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 w-screen max-w-md px-2 pt-3 transform -translate-x-1/2 left-1/2 sm:px-0">
                            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
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
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
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