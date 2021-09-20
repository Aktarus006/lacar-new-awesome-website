@extends('master')
@section('content')
    <div class="container px-4 py-8 mx-auto space-y-4 sm:px-6 lg:px-8">
        @if ($isos->count() > 0)
            <h1 class="text-xl font-medium tracking-wide text-gray-500 uppercase">Isos</h1>
            <x-documents-list :documents="$isos"></x-documents-list>
        @endif
        @if ($isos->count() > 0)
            <h1 class="text-xl font-medium tracking-wide text-gray-500 uppercase">Instructions</h1>
            <x-documents-list :documents="$isos"></x-documents-list>
        @endif
        @if ($ces->count() > 0)
            <h1 class="text-xl font-medium tracking-wide text-gray-500 uppercase">CE Declarations</h1>
            <x-documents-list :documents="$ces"></x-documents-list>
        @endif
        @if ($sds->count() > 0)
            <h1 class="text-xl font-medium tracking-wide text-gray-500 uppercase">Material Safety Data Sheet</h1>
            <x-documents-list :documents="$sds"></x-documents-list>
        @endif
        @if ($flyers->count() > 0)
            <h1 class="text-xl font-medium tracking-wide text-gray-500 uppercase">Flyers</h1>
            <x-documents-list :documents="$flyers"></x-documents-list>
        @endif

    </div>



@endsection
