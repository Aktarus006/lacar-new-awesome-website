@extends('master')

@section('content')
    <header
        class="relative flex items-center justify-center bg-fixed bg-gray-500 bg-center bg-no-repeat bg-cover bg-opacity-70 h-1/4 sm:h-2/3 bg-software">

        <div class="text-center">
            <h1 class="p-5 text-lg font-bold text-white sm:text-7xl text-shadow-lg">
                OUR SOFTWARE
            </h1>
            <h2 class="p-5 text-base font-thin text-white sm:text-4xl text-shadow-xl">
                Automatic interpretation software
            </h2>
        </div>

    </header>
    <div class="overflow-hidden bg-white">
        <div class="relative px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="absolute top-0 bottom-0 hidden w-screen lg:block bg-gray-50 left-3/4"></div>
            <div class="mx-auto text-base max-w-prose lg:max-w-none">
                <h3 class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-4xl">SOFTWARE
                </h3>
                <div class="bg-yellow-500 py-0.5 w-16 mt-5"></div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="absolute top-0 right-0 hidden -mt-20 -mr-20 lg:block" width="404" height="384" fill="none"
                        viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div class="relative mx-auto text-base max-w-prose lg:max-w-none">
                        <figure>
                            <div class="aspect-w-12 aspect-h-4 md:aspect-h-10 lg:aspect-h-8">
                                <img class="object-cover object-center rounded-lg shadow-lg"
                                    src="https://images.unsplash.com/photo-1520509414578-d9cbf09933a1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=3349&q=80"
                                    alt="">
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">

                    <div class="mx-auto mt-5 prose text-gray-500 prose-yellow lg:max-w-none lg:row-start-1 lg:col-start-1">
                        <p>GeneFox is an automatic interpretation software allowing the genotyping of the samples based on
                            melting curves analysis.</p>
                        <p>The software can be used with exported data files from several qPCR machines such as
                            LightCycler®480, LightCycler®96 from Roche and CFX96™ from Bio-Rad…</p>
                        <p>The data file from the qPCR instrument has simply to be imported and GeneFox will automatically
                            interpret the results and a report is also created.</p>
                        <p>GeneFox also deals with your whole sample management from samples’ arrival to automatic results
                            interpretation.</p>

                    </div>
                    <div class="mx-auto mt-5 prose lg:max-w-none lg:row-start-1 lg:col-start-1">
                        <a href="/">
                            <button class="px-5 py-3 font-medium text-white bg-yellow-500 rounded-lg ">Go to the
                                software</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
