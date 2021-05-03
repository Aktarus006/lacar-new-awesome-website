<style>
    .gallery {
        height: 50vh;
        min-height: 200px;
        max-height: 1000px;
    }
</style>

<!-- TODO Timer is stacking instead of reset, have to find how to solve it -->

<div x-data="{
        timer: 7000,
        autoIntervalTest: true,
        autoplaySlider: function() {
            document.getElementById('next_btn').click();
        }}" x-init="$interval(autoplaySlider, { timer, forceInterval: true})" @mouseenter="autoIntervalTest = false"
    @mouseleave="autoIntervalTest = true">
    <!-- TODO Image proportion not good on iphone -->
    <div class="relative flex-grow mx-auto bg-gray-200 shadow-xl gallery" x-data="gallery()" x-init="init()">
        <div
            class="relative flex flex-col items-center justify-center overflow-hidden text-center bg-fixed bg-no-repeat bg-cover gallery__item bg-home-banner-1">
            <h2 class="w-2/3 text-3xl font-bold text-white sm:text-6xl text-shadow-lg">
                Why are you still extracting ?
            </h2>
            <h3 class="w-2/3 m-5 text-lg font-semibold leading-normal text-white sm:text-2xl text-shadow-lg">
                Your reference company for routine constitutional genetic testing
            </h3>
        </div>
        <div
            class="relative flex flex-col items-center justify-center overflow-hidden text-center bg-fixed bg-no-repeat bg-cover gallery__item gallery__item--hidden bg-home-banner-2">
            <h2 class="w-2/3 text-3xl font-bold text-white sm:text-6xl text-shadow-lg">
                COVID-19: Our Solutions
            </h2>
            <h3 class="w-2/3 m-5 text-lg font-semibold leading-normal text-white sm:text-2xl text-shadow-lg">
                No RNA extraction solutions from nasopharyngeal and saliva samples & Acute symptoms SNPs
            </h3>
            <button class="p-3 font-normal text-white uppercase bg-yellow-500 rounded-lg hover:bg-yellow-600">
                More Information</button>
        </div>

        <!-- <div class="flex flex-col items-center justify-center overflow-hidden bg-indigo-500 gallery__background">
        <h2 class="w-2/3 text-4xl font-semibold text-gray-900">
            Picture Gallery
        </h2>
        <h3 class="w-2/3 text-xl font-semibold leading-normal text-gray-900">
            Background info about the specific gallery and some random text.
        </h3>
        <img src="https://i.picsum.photos/id/4/800/600.jpg" alt=""
            class="object-cover object-center gallery__background--image" title="Image Title">
    </div> -->
        <a class="flex items-center justify-center w-10 h-10 text-white rounded-full cursor-pointer gallery__nav gallery__nav--right"
            id="next_btn" x-on:click="next()">
            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path
                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                </path>
            </svg>
        </a>
        <a class="flex items-center justify-center w-10 h-10 text-white rounded-full cursor-pointer gallery__nav gallery__nav--left"
            x-on:click="previous()">
            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                <path
                    d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                </path>
            </svg>
        </a>
    </div>
</div>




<script src="./js/gallery.js"></script>