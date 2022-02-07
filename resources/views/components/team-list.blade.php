@props(['teams'])

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our team</h2>
                <p class="text-xl text-gray-500">Our sales team is always available to help you ! Find the salesperson in
                    charge of your region right here.

                </p>
            </div>
            <div class="lg:col-span-2">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                    @foreach ($teams as $team)
                        <li>
                            <x-team-member :member="$team" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
