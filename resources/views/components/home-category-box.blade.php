@props(['category'])

<div
    class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
    <div class="flex-shrink-0">
        <img class="object-cover w-full h-48" src="{{ $category['image'] }}" alt="">
    </div>
    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
        <div class="flex-1">
            <a href="{{ $category['link'] }}" class="block mt-2 cursor-pointer">
                <p class="text-xl font-semibold text-gray-900 hover:underline">
                    {{ $category['title'] }}
                </p>
                <p class="mt-3 text-base text-gray-500">
                    {{ strip_tags($category['description']) }}
                </p>
            </a>
        </div>

    </div>
</div>
