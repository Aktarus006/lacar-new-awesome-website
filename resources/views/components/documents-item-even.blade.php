@props(['document'])
<tr class="bg-gray-50">
    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
        {{ $document->name }}
    </td>

    <td class="float-right px-6 py-4 text-sm font-medium whitespace-nowrap">
        <a href="{{ route('downloadFile', $document->id) }}" class="text-lacar-500 hover:text-lacar-900"><svg
                xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg></a>
    </td>
</tr>
