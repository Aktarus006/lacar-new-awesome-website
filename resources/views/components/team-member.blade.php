@props(['member'])

<div class="flex items-center space-x-4 lg:space-x-6">
    <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="{{ $member->picture ?: 'https://picsum.photos/256' }}"
        alt="">
    <div class="space-y-1 text-lg font-medium leading-6">
        <h3>{{ $member->name }}</h3>
        <p class="text-indigo-600">{{ $member->role }}</p>
    </div>
</div>
