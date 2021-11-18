@extends('master')
@section('meta')
    <title>{{ $kit->meta_title }} | Lacar-MDX</title>
@endsection

@section('content')
    {{ Breadcrumbs::render('kit', $kit) }}
    <p class="mt-12 text-3xl font-bold tracking-tight text-center text-gray-900 sm:text-4xl">{{ $kit->name }}</p>
    <div class="w-12 h-1 mx-auto my-4 bg-yellow-400"></div>
    <div class="w-3/4 p-4 mx-auto leading-normal text-center text-gray-600">
        {{ strip_tags(html_entity_decode($kit->description)) }}
    </div>
    <div class="flex justify-center">
        <div class="flex items-center justify-center w-1/3 h-16 border sm:w-1/6">
            <h4 class="font-medium text-center text-gray-800">Format</h4>
        </div>
        <div class="flex items-center justify-center w-1/3 h-16 border sm:w-1/6">
            <h4 class="font-medium text-center text-gray-800">References</h4>
        </div>
    </div>
    @foreach ($kit->formats as $format)
        <div class="flex justify-center">
            <div class="flex items-center justify-center w-1/3 h-16 border sm:w-1/6">
                <h4 class="font-medium text-center text-gray-800">{{ $format->format }}</h4>
            </div>
            <div class="flex items-center justify-center w-1/3 h-16 border sm:w-1/6">
                <h4 class="font-medium text-center text-gray-800">{{ $format->reference }}</h4>
            </div>
        </div>
    @endforeach
    <div class="mx-40 mt-20">
        <div class="flex">
            <div class="w-1/2">
                <img src="https://www.lacar-mdx.com/images/kit-3.jpg" alt="">
            </div>
            <div class="w-1/2 p-12">
                <h2 class="text-2xl font-extrabold text-gray-800">INTENDED USE</h2>
                <div class="w-12 h-1 my-4 bg-yellow-400"></div>
                <p class="mt-12 text-lg text-gray-600">{{ strip_tags(html_entity_decode($kit->intended_use)) }}</p>
            </div>
        </div>
        <div class="my-20">
            <h2 class="text-2xl font-extrabold text-gray-800">DISEASE INFORMATION</h2>
            <div class="w-12 h-1 my-4 bg-yellow-400"></div>
            <p class="mt-12 text-lg text-gray-600">{{ strip_tags(html_entity_decode($kit->disease_information)) }}</p>
        </div>

    </div>


@endsection
