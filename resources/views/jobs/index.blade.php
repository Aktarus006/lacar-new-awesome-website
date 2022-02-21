@extends('master')

@section('content')
    <div class="relative flex items-center justify-center shadow-lg h-2/3">
        <img class="absolute bottom-0 object-cover object-top w-full h-full" src="/images/lacar-team.jpg" />

        <div class="absolute text-center">
            <h1 class="p-5 text-lg font-bold text-white sm:text-7xl text-shadow-lg">
                OUR TEAM
            </h1>
            <h2 class="p-5 text-base font-thin text-white sm:text-4xl text-shadow-xl">
                Join us !
            </h2>
        </div>
    </div>

    <div class="-mt-12 overflow-hidden bg-white">
        <div class="relative px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="mx-auto text-base max-w-prose lg:max-w-none">
                <h3 class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">JOB OPPORTUNITIES
                </h3>
                <div class="bg-yellow-500 py-0.5 w-16 mt-5"></div>
            </div>
        </div>
    </div>

    @if (count($jobs) > 0)
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($jobs as $job)
                        <div class="p-4 md:w-1/3">
                            <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                    src="https://images.unsplash.com/photo-1487528278747-ba99ed528ebc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80"
                                    alt="job">
                                <div class="p-6">
                                    <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">
                                        {{ $job->title }}
                                    </h2>
                                    <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">{{ $job->title }}</h1>
                                    <p class="mb-3 leading-relaxed">
                                        {{ $job->profile }}
                                    <p>
                                    <div class="flex flex-wrap items-center ">
                                        <a class="inline-flex items-center text-yellow-500 md:mb-2 lg:mb-0">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200 lg:ml-auto md:ml-0">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>1.2K
                                        </span>
                                        <span class="inline-flex items-center text-sm leading-none text-gray-400">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>6
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @else
        <div class="relative px-4 py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">There is currently no offer</div>
    @endif

@endsection
