<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-lacar-500">
    <div class="px-3 py-1 mx-auto max-w-7xl sm:px-6 lg:px-8">
    </div>
</div>



<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-gray-900" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-4 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <img class="h-10" src="{{ asset('images/lacar-logo-white.png') }}" alt="Company name">
                <p class="text-base text-gray-500">
                    LaCAR MDx is a Belgian company, producing and commercialising CE-IVD diagnostic kits for genetics
                    under ISO 13485 certification.
                </p>
            </div>

            <div class="mt-12 md:mt-0">
                <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                    QUICK MENU
                </h3>
                <ul class="mt-4 space-y-4">
                    <li>
                        <a href="/" class="text-base text-gray-500 hover:text-lacar-500">
                            Home
                        </a>
                    </li>

                    {{-- <li>
                        <a href="/kits" class="text-base text-gray-500 hover:text-lacar-500">
                            Kits
                        </a>
                    </li> --}}

                    <li>
                        <a href="/solutions" class="text-base text-gray-500 hover:text-lacar-500">
                            Solutions
                        </a>
                    </li>

                    <li>
                        <a href="/software" class="text-base text-gray-500 hover:text-lacar-500">
                            Software
                        </a>
                    </li>
                    <li>
                        <a href="/restricted" class="text-base text-gray-500 hover:text-lacar-500">
                            Restricted Area
                        </a>
                    </li>
                    <li>
                        <a href="/services" class="text-base text-gray-500 hover:text-lacar-500">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="/jobs" class="text-base text-gray-500 hover:text-lacar-500">
                            Jobs
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-12 md:mt-0">
                <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                    CONTACT
                </h3>
                <p class="mt-4 space-y-4 text-base text-gray-500">
                    LaCAR MDx Technologies <br>
                    Rue Bois Saint-Jean, 3 <br>
                    4102 Ougrée - BELGIUM
                </p>
                <div class="flex mt-8 text-base text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg> <span class="ml-2">+32 4 287 39 44</span>
                </div>


            </div>
            <div class="mt-12 md:mt-0">
                <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                    CERTIFICATION
                </h3>
                <p class="mt-4 text-base text-gray-500">
                    LaCAR MDx Technologies is an ISO 13485 certified company.
                </p>
            </div>
        </div>
    </div>

</footer>
