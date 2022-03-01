@props(['member'])

<div class="flex items-center space-x-4 lg:space-x-6">
    <img class="object-contain w-16 h-16 border-4 rounded-full lg:w-20 lg:h-20 border-lacar-300"
        src="{{ $member->picture != ''? asset(Voyager::image($member->picture)): 'https://i.pravatar.cc/256?u=' . $member->id }}"
        alt="">
    <div class="space-y-1 text-lg font-medium leading-6">
        <h3>{{ $member->name }}</h3>
        <p class="text-lacar-300">{{ $member->role }}</p>
    </div>
</div>
