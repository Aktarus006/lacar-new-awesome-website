@props(['documents'])

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col max-w-4xl pt-4 md:ml-8">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Name
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Download</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $doc)
                            @if ($doc->id % 2 !== 0)
                                <x-documents-item-odd :document="$doc"></x-documents-item-odd>
                            @else
                                <x-documents-item-even :document="$doc"></x-documents-item-even>
                            @endif

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
