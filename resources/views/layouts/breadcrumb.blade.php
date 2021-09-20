@unless($breadcrumbs->isEmpty())
    <nav class="flex bg-white border-b border-gray-200" aria-label="Breadcrumb"">
                                                            <ol class="flex w-full max-w-screen-xl px-4 mx-auto space-x-4  sm:px-6 lg:px-8">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="flex">
                    <div class="flex items-center">
                        <a href="{{ $breadcrumb->url }}" class="text-gray-400 hover:text-gray-500">
                            @if ($breadcrumb->title === 'Home')
                                <!-- Heroicon name: solid/home -->
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="sr-only">Home</span>
                            @else
                                {{ $breadcrumb->title }}
                            @endif

                        </a>
                    </div>
                </li>
            @else
                <li class="flex">
                    <div class="flex items-center">
                        @if ($breadcrumb->title === 'Home')
                            <!-- Heroicon name: solid/home -->
                            <svg class="flex-shrink-0 w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span class="sr-only">Home</span>
                        @else
                            <span class="text-yellow-500">{{ $breadcrumb->title }}</span>
                        @endif
                    </div>
                </li>
            @endif

            @if ($loop->last)
                <svg class="flex-shrink-0 w-6 h-full text-white" viewBox="0 0 24 44" preserveAspectRatio="none"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                </svg>
            @else
                <li class="flex">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                </li>
            @endif

        @endforeach
        </ol>
    </nav>
@endunless
