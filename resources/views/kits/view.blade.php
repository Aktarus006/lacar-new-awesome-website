@extends('master')
@section('meta')
    <title>{{ $kit->meta_title }} | Lacar-MDX</title>
@endsection

@section('content')
    <div class="w-full pt-12 lg:pt-0">
        {{ Breadcrumbs::render('kit', $kit) }}
        <p class="mt-12 font-bold tracking-tight text-center text-gray-900 text-md lg:text-3xl">{{ $kit->name }}
        </p>
        <div class="w-12 h-1 mx-auto my-4 bg-yellow-400"></div>
        <div class="w-3/4 p-4 mx-auto leading-normal text-center text-gray-600">
            {!! html_entity_decode($kit->description) !!}
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
        <div class="mx-10 mt-20 lg:mx-40">
            <div class="lg:flex">
                <div class="w-full lg:w-1/2">
                    <img src="https://www.lacar-mdx.com/images/kit-3.jpg" alt="">
                </div>
                <div class="w-full pt-8 lg:w-1/2 lg:p-12">
                    <h2 class="text-2xl font-extrabold text-gray-800">INTENDED USE</h2>
                    <div class="w-12 h-1 my-4 bg-yellow-400"></div>
                    <p class="mt-12 text-lg text-gray-600">{!! html_entity_decode($kit->intended_use) !!}</p>
                </div>
            </div>
            <div class="my-20">
                <h2 class="text-2xl font-extrabold text-gray-800">DISEASE INFORMATION</h2>
                <div class="w-12 h-1 my-4 bg-yellow-400"></div>
                <div class="w-full mt-12 text-lg prose text-gray-600">
                    {!! html_entity_decode($kit->disease_information) !!}
                </div>
            </div>


        </div>
        @include('layouts.contactForm', ['subject' => 'Request for : '.$kit->name, 'description' => 'Feel free to
        contact us !', 'title' => 'Want to know more about '.$kit->name.' ?'])


    </div>
@endsection
